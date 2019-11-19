<?php

namespace AgenciaS3\Http\Controllers\Admin\Service;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\SegmentRepository;
use AgenciaS3\Repositories\ServiceSegmentRepository;
use AgenciaS3\Validators\ServiceSegmentValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class ServiceSegmentController extends Controller
{

    protected $repository;

    protected $validator;

    protected $segmentRepository;

    public function __construct(ServiceSegmentRepository $repository,
                                ServiceSegmentValidator $validator,
                                SegmentRepository $segmentRepository)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->segmentRepository = $segmentRepository;
    }

    public function index($id)
    {
        $config = $this->header();
        $arraySelect = $this->segmentRepository->orderBy('name', 'asc')->findWhere(['active' => 'y']);
        $dados = $this->repository->findWhere(['service_id' => $id]);

        return view('admin.service.segment.index', compact('config', 'arraySelect', 'dados', 'id'));
    }

    public function header()
    {
        $config['title'] = "Áreas de Expertise";
        $config['activeMenu'] = 'service';
        $config['activeMenuN2'] = 'segment';
        $config['action'] = 'Segmentos';

        return $config;
    }

    public function store(AdminRequest $request)
    {
        $data = $request->all();
        $verifica = $this->repository->findWhere([
            'service_id' => $data['service_id'], 'segment_id' => $data['segment_id']
        ]);

        if ($verifica->toArray()) {
            return redirect()->back()->withErrors('Segmento já adicionado neste serviço.')->withInput();
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

    public function destroyAllService($id)
    {
        return $this->repository->deleteWhere(['service_id' => $id]);
    }

}