<?php

namespace AgenciaS3\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class PostSegmentValidator.
 *
 * @package namespace AgenciaS3\Validators;
 */
class PostSegmentValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'post_id' => 'required|exists:posts,id',
            'segment_id' => 'required|exists:segments,id'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'post_id' => 'required|exists:posts,id',
            'segment_id' => 'required|exists:segments,id'
        ],
    ];
}
