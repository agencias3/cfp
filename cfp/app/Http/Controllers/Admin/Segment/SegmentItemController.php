<?php

namespace AgenciaS3\Http\Controllers\Admin\Segment;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\ProductTextRepository;
use AgenciaS3\Repositories\SegmentItemRepository;
use AgenciaS3\Services\UtilObjeto;
use AgenciaS3\Validators\ProductTextValidator;
use AgenciaS3\Validators\SegmentItemValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;


class SegmentItemController extends Controller
{

    protected $repository;

    protected $validator;

    protected $utilObjeto;

    public function __construct(SegmentItemRepository $repository,
                                SegmentItemValidator $validator,
                                UtilObjeto $utilObjeto)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->utilObjeto = $utilObjeto;
    }

    public function index($segment_id)
    {
        $config = $this->header();
        $dados = $this->repository->orderBy('order', 'asc')->scopeQuery(function ($query) use ($segment_id) {
            return $query->where('segment_id', $segment_id);
        })->paginate();

        return view('admin.segment.item.index', compact('dados', 'config', 'segment_id'));
    }

    public function header()
    {
        $config['title'] = "Segmentos > Items";
        $config['activeMenu'] = "segment";
        $config['activeMenuN2'] = "item";

        return $config;
    }

    public function create($segment_id)
    {
        $config = $this->header();
        $config['action'] = 'Cadastrar';

        return view('admin.segment.item.create', compact('config', 'segment_id'));
    }

    public function store(AdminRequest $request)
    {
        try {
            $data = $request->all();

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $dados = $this->repository->create($data);

            $response = [
                'success' => 'Registro adicionado com sucesso!'
            ];

            return redirect()->back()->with('success', $response['success']);

        } catch (ValidatorException $e) {
            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    public function edit($id)
    {
        $config = $this->header();
        $config['action'] = 'Editar';
        $dados = $this->repository->find($id);
        $segment_id = $dados->segment_id;

        return view('admin.segment.item.edit', compact('dados', 'config', 'segment_id'));
    }

    public function update(AdminRequest $request, $id)
    {
        try {
            $data = $request->all();

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

    public function destroySegment($id)
    {
        if ($id) {
            return $this->repository->deleteWhere(['segment_id' => $id]);
        }

        return false;
    }

}
