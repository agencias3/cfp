<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\SegmentContactRepository;
use AgenciaS3\Entities\SegmentContact;
use AgenciaS3\Validators\SegmentContactValidator;

/**
 * Class SegmentContactRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class SegmentContactRepositoryEloquent extends BaseRepository implements SegmentContactRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SegmentContact::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return SegmentContactValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
