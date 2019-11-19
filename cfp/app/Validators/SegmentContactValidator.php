<?php

namespace AgenciaS3\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class SegmentContactValidator.
 *
 * @package namespace AgenciaS3\Validators;
 */
class SegmentContactValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'segment_id' => 'required|exists:segments,id',
            'name' => 'required|min:3|max:255',
            'phone' => 'required|min:3|max:255',
            'email' => 'required|email',
            'message' => 'required',
            'view' => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'segment_id' => 'required|exists:segments,id',
            'name' => 'required|min:3|max:255',
            'phone' => 'required|min:3|max:255',
            'email' => 'required|email',
            'message' => 'required',
            'view' => 'required'
        ],
    ];
}
