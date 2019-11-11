<?php

namespace AgenciaS3\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class PostServiceValidator.
 *
 * @package namespace AgenciaS3\Validators;
 */
class PostServiceValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'post_id' => 'required|exists:posts,id',
            'service_id' => 'required|exists:services,id'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'post_id' => 'required|exists:posts,id',
            'service_id' => 'required|exists:services,id'
        ],
    ];
}
