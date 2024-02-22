<?php

namespace ACAT\Commons\Validator;

use Attribute;
use Spatie\DataTransferObject\Validation\ValidationResult;
use Spatie\DataTransferObject\Validator;
use Symfony\Component\Uid\Uuid;

/**
 *
 */
#[Attribute(Attribute::TARGET_PROPERTY | Attribute::IS_REPEATABLE)]
final class IsUuid implements Validator {

    /**
     * @param mixed $value
     * @return ValidationResult
     */
    public function validate(mixed $value): ValidationResult {
        if (!empty($value) && !Uuid::isValid($value)) {
            return ValidationResult::invalid($value . " . isn't a valid uuid");
        }
        return ValidationResult::valid();
    }
}