<?php

namespace ACAT\Commons\Validator;

use Attribute;
use Spatie\DataTransferObject\Validation\ValidationResult;
use Spatie\DataTransferObject\Validator;

/**
 *
 */
#[Attribute(Attribute::TARGET_PROPERTY | Attribute::IS_REPEATABLE)]
final class NotEmpty implements Validator {

    /**
     * @param mixed $value
     * @return ValidationResult
     */
    public function validate(mixed $value): ValidationResult {
        if (empty($value)) {
            return ValidationResult::invalid($value . " . is empty");
        }
        return ValidationResult::valid();
    }
}