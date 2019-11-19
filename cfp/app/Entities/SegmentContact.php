<?php

namespace AgenciaS3\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class SegmentContact.
 *
 * @package namespace AgenciaS3\Entities;
 */
class SegmentContact extends Model implements Transformable
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
        'phone',
        'email',
        'message',
        'view',
        'session_id',
        'ip'
    ];

    public function segment()
    {
        return $this->belongsTo(Segment::class, 'segment_id');
    }

}
