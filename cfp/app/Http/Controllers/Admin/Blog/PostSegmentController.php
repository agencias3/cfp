<?php

namespace AgenciaS3\Http\Controllers\Admin\Blog;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\AdminRequest;
use AgenciaS3\Repositories\PostSegmentRepository;
use AgenciaS3\Repositories\PostServiceRepository;
use AgenciaS3\Repositories\SegmentRepository;
use AgenciaS3\Repositories\ServiceRepository;
use AgenciaS3\Validators\PostSegmentValidator;
use AgenciaS3\Validators\PostServiceValidator;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class PostSegmentController extends Controller
{

    protected $repository;

    protected $validator;

    protected $segmentRepository;

    public function __construct(PostSegmentRepository $repository,
                                PostSegmentValidator $validator,
                                SegmentRepository $segmentRepository)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->segmentRepository = $segmentRepository;
    }

    public function index($id)
    {
        $config = $this->header();
        $tags = $this->segmentRepository->orderBy('name', 'asc')->findWhere(['active' => 'y']);
        $dados = $this->repository->findWhere(['post_id' => $id]);

        return view('admin.blog.post.segment.index', compact('config', 'tags', 'dados', 'id'));
    }

    public function header()
    {
        $config['title'] = "Blog > Post";
        $config['activeMenu'] = 'blog';
        $config['activeMenuN2'] = 'post';
        $config['action'] = 'Segmentos';

        return $config;
    }

    public function store(AdminRequest $request)
    {
        $data = $request->all();
        $verifica = $this->repository->findWhere([
            'post_id' => $data['post_id'], 'segment_id' => $data['segment_id']
        ]);

        if ($verifica->toArray()) {
            return redirect()->back()->withErrors('Segmento já adicionado neste Post')->withInput();
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

    public function destroyAllSegment($id)
    {
        return $this->repository->deleteWhere(['segment_id' => $id]);
    }

}