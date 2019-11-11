<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\PostSegmentRepository;
use AgenciaS3\Entities\PostSegment;
use AgenciaS3\Validators\PostSegmentValidator;

/**
 * Class PostSegmentRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class PostSegmentRepositoryEloquent extends BaseRepository implements PostSegmentRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PostSegment::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PostSegmentValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
