<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\PostServiceRepository;
use AgenciaS3\Entities\PostService;
use AgenciaS3\Validators\PostServiceValidator;

/**
 * Class PostServiceRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class PostServiceRepositoryEloquent extends BaseRepository implements PostServiceRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PostService::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PostServiceValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
