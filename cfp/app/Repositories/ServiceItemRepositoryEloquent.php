<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\ServiceItemRepository;
use AgenciaS3\Entities\ServiceItem;
use AgenciaS3\Validators\ServiceItemValidator;

/**
 * Class ServiceItemRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class ServiceItemRepositoryEloquent extends BaseRepository implements ServiceItemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ServiceItem::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ServiceItemValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
