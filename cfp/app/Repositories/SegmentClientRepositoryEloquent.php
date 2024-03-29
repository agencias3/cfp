<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\SegmentClientRepository;
use AgenciaS3\Entities\SegmentClient;
use AgenciaS3\Validators\SegmentClientValidator;

/**
 * Class SegmentClientRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class SegmentClientRepositoryEloquent extends BaseRepository implements SegmentClientRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SegmentClient::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return SegmentClientValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
