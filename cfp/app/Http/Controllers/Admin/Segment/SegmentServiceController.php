<?php

namespace AgenciaS3\Http\Controllers\Admin\Segment;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\SegmentRepository;
use AgenciaS3\Repositories\ServiceRepository;
use AgenciaS3\Repositories\ServiceSegmentRepository;
use AgenciaS3\Validators\ServiceSegmentValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class SegmentServiceController extends Controller
{

    protected $repository;

    protected $validator;

    protected $serviceRepository;

    public function __construct(ServiceSegmentRepository $repository,
                                ServiceSegmentValidator $validator,
                                ServiceRepository $serviceRepository)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->serviceRepository = $serviceRepository;
    }

    public function index($id)
    {
        $config = $this->header();
        $arraySelect = $this->serviceRepository->orderBy('name', 'asc')->findWhere(['active' => 'y']);
        $dados = $this->repository->findWhere(['segment_id' => $id]);

        return view('admin.segment.service.index', compact('config', 'arraySelect', 'dados', 'id'));
    }

    public function header()
    {
        $config['title'] = "Segmentos";
        $config['activeMenu'] = 'segment';
        $config['activeMenuN2'] = 'service';
        $config['action'] = 'Serviços';

        return $config;
    }

    public function store(AdminRequest $request)
    {
        $data = $request->all();
        $verifica = $this->repository->findWhere([
            'segment_id' => $data['segment_id'], 'service_id' => $data['service_id']
        ]);

        if ($verifica->toArray()) {
            return redirect()->back()->withErrors('Serviço já adicionado neste segmento.')->withInput();
        } else {
            try {

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
    }

    public function destroyAllPost($id)
    {
        return $this->repository->deleteWhere(['service_id' => $id]);
    }

    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);
        return redirect()->back()->with('success', 'Registro removido com sucesso!');
    }

    public function destroyAllSegment($id)
    {
        return $this->repository->deleteWhere(['segment_id' => $id]);
    }

}