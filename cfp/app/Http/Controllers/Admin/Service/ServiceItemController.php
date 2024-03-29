<?php

namespace AgenciaS3\Http\Controllers\Admin\Service;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\ProductTextRepository;
use AgenciaS3\Repositories\SegmentItemRepository;
use AgenciaS3\Repositories\ServiceItemRepository;
use AgenciaS3\Services\UtilObjeto;
use AgenciaS3\Validators\ProductTextValidator;
use AgenciaS3\Validators\SegmentItemValidator;
use AgenciaS3\Validators\ServiceItemValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;


class ServiceItemController extends Controller
{

    protected $repository;

    protected $validator;

    protected $utilObjeto;

    public function __construct(ServiceItemRepository $repository,
                                ServiceItemValidator $validator,
                                UtilObjeto $utilObjeto)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->utilObjeto = $utilObjeto;
    }

    public function index($service_id)
    {
        $config = $this->header();
        $dados = $this->repository->orderBy('order', 'asc')->scopeQuery(function ($query) use ($service_id) {
            return $query->where('service_id', $service_id);
        })->paginate();

        return view('admin.service.item.index', compact('dados', 'config', 'service_id'));
    }

    public function header()
    {
        $config['title'] = "Áreas de Expertise > Items";
        $config['activeMenu'] = "service";
        $config['activeMenuN2'] = "item";

        return $config;
    }

    public function create($service_id)
    {
        $config = $this->header();
        $config['action'] = 'Cadastrar';

        return view('admin.service.item.create', compact('config', 'service_id'));
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
        $service_id = $dados->service_id;

        return view('admin.service.item.edit', compact('dados', 'config', 'service_id'));
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

    public function destroyService($id)
    {
        if ($id) {
            return $this->repository->deleteWhere(['service_id' => $id]);
        }

        return false;
    }

}
