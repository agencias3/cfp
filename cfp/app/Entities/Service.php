<?php

namespace AgenciaS3\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Service.
 *
 * @package namespace AgenciaS3\Entities;
 */
class Service extends Model implements Transformable
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
        'call',
        'call_items',
        'image',
        'icon',
        'icon_hover',
        'description',
        'order',
        'active',
        'seo_description',
        'seo_keywords',
        'seo_link'
    ];

    public function items()
    {
        return $this->hasMany(ServiceItem::class);
    }

    public function contacts()
    {
        return $this->hasMany(ServiceContact::class);
    }

}
