<?php

namespace AgenciaS3\Http\Controllers\Admin\Configuration\Page;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\PageItemRepository;
use AgenciaS3\Services\UtilObjeto;
use AgenciaS3\Validators\PageItemValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;


class PageItemController extends Controller
{

    protected $repository;

    protected $validator;

    protected $utilObjeto;

    protected $path;

    public function __construct(PageItemRepository $repository,
                                PageItemValidator $validator,
                                UtilObjeto $utilObjeto)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->utilObjeto = $utilObjeto;
        $this->path = 'uploads/page/item/';
    }

    public function index($page_id)
    {
        $config = $this->header();
        $dados = $this->repository->orderBy('order', 'asc')->scopeQuery(function ($query) use ($page_id) {
            return $query->where('page_id', $page_id);
        })->paginate();

        if($page_id == 7){
            $config['activeMenu'] = 'about';
        }
        if($page_id == 10){
            $config['activeMenu'] = 'work';
        }
        $config['activeMenuN2'] = 'page-'.$page_id;


        return view('admin.configuration.page.item.index', compact('dados', 'config', 'page_id'));
    }

    public function header()
    {
        $config['title'] = "Páginas e Textos > Ítens";
        $config['activeMenu'] = "page";
        $config['activeMenuN2'] = "page";

        return $config;
    }

    public function create($page_id)
    {
        $config = $this->header();
        $config['action'] = 'Cadastrar';

        if($page_id == 7){
            $config['activeMenu'] = 'about';
        }
        if($page_id == 10){
            $config['activeMenu'] = 'work';
        }
        $config['activeMenuN2'] = 'page-'.$page_id;

        return view('admin.configuration.page.item.create', compact('config', 'page_id'));
    }

    public function store(AdminRequest $request)
    {
        try {
            $data = $request->all();

            if (isset($data['image'])) {
                $data['image'] = $this->utilObjeto->uploadFile($request, $data, $this->path, 'image', 'image|mimes:jpeg,png,jpg,gif,svg|max:2048');
            }

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $dados = $this->repository->create($data);

            $response = [
                'success' => 'Registro adicionado com sucesso!'
            ];

            return redirect()->back()->with('success', $response['success']);

        } catch (ValidatorException $e) {
            if (isset($data['image'])) {
                $this->utilObjeto->destroyFile($this->path, $data['image']);
            }
            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    public function edit($id)
    {
        $config = $this->header();
        $config['action'] = 'Editar';
        $dados = $this->repository->find($id);
        $page_id = $dados->page_id;

        if($page_id == 7){
            $config['activeMenu'] = 'about';
        }
        if($page_id == 10){
            $config['activeMenu'] = 'work';
        }
        $config['activeMenuN2'] = 'page-'.$page_id;

        return view('admin.configuration.page.item.edit', compact('dados', 'config', 'page_id'));
    }

    public function update(AdminRequest $request, $id)
    {
        try {
            $data = $request->all();

            if (isset($data['image'])) {
                $data['image'] = $this->utilObjeto->uploadFile($request, $data, $this->path, 'image', 'image|mimes:jpeg,png,jpg,gif,svg|max:2048');
            }

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $dados = $this->repository->update($data, $id);

            $response = [
                'success' => 'Registro alterado com sucesso!'
            ];

            return redirect()->back()->with('success', $response['success']);

        } catch (ValidatorException $e) {
            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    public function active($id)
    {
        try {
            $dados = $this->repository->find($id);

            $data = $dados->toArray();
            if ($dados->active == 'y') {
                $data['active'] = 'n';
            } else {
                $data['active'] = 'y';
            }

            $dados = $this->repository->update($data, $id);

            return $dados;

        } catch (ValidatorException $e) {
            return false;
        }
    }

    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);
        return redirect()->back()->with('success', 'Registro removido com sucesso!');
    }

    public function destroyFile($id, $name)
    {
        $dados = $this->repository->find($id);
        if (isset($dados->$name)) {
            $data = $dados->toArray();
            if (isset($dados->$name) && $this->utilObjeto->destroyFile($this->path, $dados->$name)) {

                $data[$name] = '';
                $this->repository->update($data, $id);

                return redirect()->back()->with('success', ucfirst($name) . ' removida com sucesso!');
            }

            return redirect()->back()->withErrors('Erro ao excluír ' . ucfirst($name))->withInput();
        }
    }

}
