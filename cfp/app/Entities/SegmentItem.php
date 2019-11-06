<?php

namespace AgenciaS3\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class SegmentItem.
 *
 * @package namespace AgenciaS3\Entities;
 */
class SegmentItem extends Model implements Transformable
{
    use TransformableTrait, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'segment_id',
        'name',
        'description',
        'order',
        'active'
    ];

    public function segment()
    {
        return $this->belongsTo(Segment::class, 'segment_id');
    }

}
