<?php

namespace AgenciaS3\Http\Controllers\Admin\Store;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\StoreImageRepository;
use AgenciaS3\Services\UtilObjeto;
use AgenciaS3\Validators\StoreImageValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class StoreImageController extends Controller
{

    protected $repository;

    protected $validator;

    protected $utilObjeto;

    protected $path;

    public function __construct(StoreImageRepository $repository,
                                StoreImageValidator $validator,
                                UtilObjeto $utilObjeto)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->utilObjeto = $utilObjeto;
        $this->path = 'uploads/store/';
    }

    public function index($id)
    {
        $config = $this->header();
        $config['galery'] = true;
        $routeUpload = route('admin.store.gallery.upload', ['id' => $id]);

        $dados = $this->repository->orderBy('order', 'asc')->findWhere(['store_id' => $id]);

        return view('admin.store.gallery.index', compact('dados', 'id', 'config', 'routeUpload'));
    }

    public function header()
    {
        $config['title'] = "Lojas > Galeria";
        $config['activeMenu'] = 'store';
        $config['activeMenuN2'] = 'store';

        return $config;
    }

    public function store(AdminRequest $request)
    {
        try {
            $data = $request->all();

            $data['order'] = 0;
            $data['cover'] = 'n';

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $banner = $this->repository->create($data);

            $response = [
                'success' => 'Registro atualizado com sucesso!'
            ];

            return redirect()->back()->with('success', $response['success']);

        } catch (ValidatorException $e) {
            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    public function upload(AdminRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->skipCache(true);
        $verifica = $this->repository->findWhere(['store_id' => $id]);
        if ($verifica->toArray()) {
            $data['cover'] = 'n';
        } else {
            $data['cover'] = 'y';
        }

        if (isset($data['cover']) && !empty($data['cover'])) {
            $data['image'] = $this->utilObjeto->uploadFile($request, $data, $this->path, 'Filedata', 'image|mimes:jpeg,png,jpg,gif,svg|max:2048');
            $data['store_id'] = $id;
            $data['label'] = '';
            $data['order'] = 0;

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $dados = $this->repository->create($data);

            return $dados;
        }
    }

    public function destroyGallery($id)
    {
        return $this->repository->deleteWhere(['store_id' => $id]);
    }

    public function destroy($id)
    {
        if ($this->destroyImage($id)) {
            $deleted = $this->repository->delete($id);
            return redirect()->back()->with('success', 'Registro removido com sucesso!');
        }

        return redirect()->back()->withErrors('Erro ao excluír imagem')->withInput();
    }

    public function destroyImage($id)
    {
        $dados = $this->repository->find($id);
        if (isset($dados->image)) {
            $data = $dados->toArray();
            if (isset($dados->image) && $this->utilObjeto->destroyFile($this->path, $dados->image)) {

                $data['image'] = '';
                $this->repository->update($data, $id);

                return true;
            }

            return false;
        }

        return false;
    }

    public function updateLabel(AdminRequest $request, $id)
    {
        $data = $request->all();
        $dados = $this->repository->update($data, $id);

        return $dados['label'];
    }

    public function cover(AdminRequest $request, $id)
    {
        $data = $request->all();
        //remove capa de todos
        $this->repository->scopeQuery(function ($query) use ($data) {
            $query->where([
                'store_id' => $data['id_album'],
                'cover' => 'y'
            ])->update(['cover' => 'n']);
            return $query->where(['store_id' => $data['id_album'], 'cover' => 'n']);
        })->all();

        $data['cover'] = 'y';
        $dados = $this->repository->update($data, $id);

        return $dados;
    }

    public function order(AdminRequest $request, $id)
    {
        $item = '';
        extract($request->all());
        parse_str($item, $arr);
        $dados = '';

        foreach ($arr['item'] as $pos => $foto_id) {
            $image['order'] = $pos;
            $dados = $this->repository->update($image, $foto_id);
        }

        return $dados;
    }

}
