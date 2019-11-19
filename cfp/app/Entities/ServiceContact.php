<?php

namespace AgenciaS3\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class ServiceContact.
 *
 * @package namespace AgenciaS3\Entities;
 */
class ServiceContact extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'service_id',
        'name',
        'phone',
        'email',
        'message',
        'view',
        'session_id',
        'ip'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

}
