<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\SegmentImageRepository;
use AgenciaS3\Entities\SegmentImage;
use AgenciaS3\Validators\SegmentImageValidator;
use Prettus\Repository\Traits\CacheableRepository;

/**
 * Class SegmentImageRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class SegmentImageRepositoryEloquent extends BaseRepository implements SegmentImageRepository, CacheableInterface
{

    use CacheableRepository;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SegmentImage::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return SegmentImageValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
