<?php

namespace AgenciaS3\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class TeamValidator.
 *
 * @package namespace AgenciaS3\Validators;
 */
class TeamValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'type' => 'required',
            'name' => 'required|max:191',
            'active' => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'type' => 'required',
            'name' => 'required|max:191',
            'active' => 'required'
        ],
    ];
}
