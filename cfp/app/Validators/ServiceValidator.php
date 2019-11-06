<?php

namespace AgenciaS3\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class ServiceValidator.
 *
 * @package namespace AgenciaS3\Validators;
 */
class ServiceValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|max:255',
            'active' => 'required',
            'seo_link' => 'required|max:255'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required|max:255',
            'active' => 'required',
            'seo_link' => 'required|max:255'
        ],
    ];
}
