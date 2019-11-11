<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\ServiceSegmentRepository;
use AgenciaS3\Entities\ServiceSegment;
use AgenciaS3\Validators\ServiceSegmentValidator;

/**
 * Class ServiceSegmentRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class ServiceSegmentRepositoryEloquent extends BaseRepository implements ServiceSegmentRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ServiceSegment::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ServiceSegmentValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
