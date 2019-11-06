<?php

namespace AgenciaS3\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class SegmentItemValidator.
 *
 * @package namespace AgenciaS3\Validators;
 */
class SegmentItemValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'segment_id' => 'required|exists:segments,id',
            'name' => 'required|max:255',
            'active' => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'segment_id' => 'required|exists:segments,id',
            'name' => 'required|max:255',
            'active' => 'required'
        ],
    ];
}
