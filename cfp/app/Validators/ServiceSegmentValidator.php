<?php

namespace AgenciaS3\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class ServiceSegmentValidator.
 *
 * @package namespace AgenciaS3\Validators;
 */
class ServiceSegmentValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'service_id' => 'required|exists:services,id',
            'segment_id' => 'required|exists:segments,id'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'service_id' => 'required|exists:services,id',
            'segment_id' => 'required|exists:segments,id'
        ],
    ];
}
