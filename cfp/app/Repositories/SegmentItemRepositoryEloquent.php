<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\SegmentItemRepository;
use AgenciaS3\Entities\SegmentItem;
use AgenciaS3\Validators\SegmentItemValidator;

/**
 * Class SegmentItemRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class SegmentItemRepositoryEloquent extends BaseRepository implements SegmentItemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SegmentItem::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return SegmentItemValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
