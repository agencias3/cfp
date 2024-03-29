<?php

namespace AgenciaS3\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Work.
 *
 * @package namespace AgenciaS3\Entities;
 */
class Work extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'formation',
        'state',
        'city',
        'occupation_area',
        'file',
        'message',
        'view',
        'session_id',
        'ip'
    ];

}
