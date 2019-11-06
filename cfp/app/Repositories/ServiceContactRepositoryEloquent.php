<?php

namespace AgenciaS3\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use AgenciaS3\Repositories\ServiceContactRepository;
use AgenciaS3\Entities\ServiceContact;
use AgenciaS3\Validators\ServiceContactValidator;

/**
 * Class ServiceContactRepositoryEloquent.
 *
 * @package namespace AgenciaS3\Repositories;
 */
class ServiceContactRepositoryEloquent extends BaseRepository implements ServiceContactRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ServiceContact::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ServiceContactValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
