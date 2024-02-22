<?php

namespace ACAT\Commons\Validator;

use DateTime;
use Attribute;
use Spatie\DataTransferObject\Validator;
use Spatie\DataTransferObject\Validation\ValidationResult;

/**
 *
 */
#[Attribute(Attribute::TARGET_PROPERTY | Attribute::IS_REPEATABLE)]
final class IsValidDate implements Validator {

    /**
     * @param mixed $value
     * @return ValidationResult
     */
    public function validate(mixed $value) : ValidationResult {
        if (empty($value) || !DateTime::createFromFormat('Y-m-d', $value)) {
            return ValidationResult::invalid($value . " . isn't a valid date");
        }
        return ValidationResult::valid();
    }
}