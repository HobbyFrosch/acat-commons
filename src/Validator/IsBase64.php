<?php

namespace ACAT\Commons\Validator;

use Attribute;
use ACAT\Dto\Validator;
use ACAT\Dto\Validation\ValidationResult;


/**
 *
 */
#[Attribute(Attribute::TARGET_PROPERTY | Attribute::IS_REPEATABLE)]
final class IsBase64 implements Validator {

    public function validate(mixed $value): ValidationResult {
        if ($value !== null && !base64_decode($value, true)) {
            return ValidationResult::invalid("content isn't valid base64");
        }
        return ValidationResult::valid();
    }
}