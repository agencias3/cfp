<?php

namespace AgenciaS3\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Segment.
 *
 * @package namespace AgenciaS3\Entities;
 */
class Segment extends Model implements Transformable
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
        'icon',
        'icon_hover',
        'image',
        'description',
        'active',
        'order',
        'seo_keywords',
        'seo_description',
        'seo_link'
    ];

    public function images()
    {
        return $this->hasMany(SegmentImage::class);
    }

    public function items()
    {
        return $this->hasMany(SegmentItem::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function serviceSegments()
    {
        return $this->hasMany(ServiceSegment::class);
    }

    public function contacts()
    {
        return $this->hasMany(SegmentContact::class);
    }

}
