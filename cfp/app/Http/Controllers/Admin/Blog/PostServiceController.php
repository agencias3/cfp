<?php

namespace AgenciaS3\Http\Controllers\Admin\Blog;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\PostServiceRepository;
use AgenciaS3\Repositories\ServiceRepository;
use AgenciaS3\Validators\PostServiceValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class PostServiceController extends Controller
{

    protected $repository;

    protected $validator;

    protected $serviceRepository;

    public function __construct(PostServiceRepository $repository,
                                PostServiceValidator $validator,
                                ServiceRepository $serviceRepository)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->serviceRepository = $serviceRepository;
    }

    public function index($id)
    {
        $config = $this->header();
        $tags = $this->serviceRepository->orderBy('name', 'asc')->findWhere(['active' => 'y']);
        $dados = $this->repository->findWhere(['post_id' => $id]);

        return view('admin.blog.post.service.index', compact('config', 'tags', 'dados', 'id'));
    }

    public function header()
    {
        $config['title'] = "Blog > Post";
        $config['activeMenu'] = 'blog';
        $config['activeMenuN2'] = 'post';
        $config['action'] = 'Serviços';

        return $config;
    }

    public function store(AdminRequest $request)
    {
        $data = $request->all();
        $verifica = $this->repository->findWhere([
            'post_id' => $data['post_id'], 'service_id' => $data['service_id']
        ]);

        if ($verifica->toArray()) {
            return redirect()->back()->withErrors('Serviço já adicionado neste Post')->withInput();
        } else {
            try {

                $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
                $dados = $this->repository->create($data);

                $response = [
                    'success' => 'Registro adicionado com sucesso!',
                    'data' => $dados->toArray(),
                ];

                return redirect()->back()->with('success', $response['success']);

            } catch (ValidatorException $e) {
                return redirect()->back()->withErrors($e->getMessageBag())->withInput();
            }
        }
    }

    public function destroyAllPost($id)
    {
        return $this->repository->deleteWhere(['post_id' => $id]);
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