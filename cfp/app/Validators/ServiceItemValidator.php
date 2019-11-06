<?php

namespace AgenciaS3\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class ServiceItemValidator.
 *
 * @package namespace AgenciaS3\Validators;
 */
class ServiceItemValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'service_id' => 'required|exists:services,id',
            'name' => 'required|max:255',
            'active' => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'service_id' => 'required|exists:services,id',
            'name' => 'required|max:255',
            'active' => 'required'
        ],
    ];
}
