<?php

namespace ACAT\Commons\Validator;

use Attribute;
use Spatie\DataTransferObject\Validator;
use Spatie\DataTransferObject\Validation\ValidationResult;

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::IS_REPEATABLE)]
final class IsNumber implements Validator {

    /**
     * @var int|null
     */
    private ?int $minValue = null;

    /**
     * @param int|null $minValue
     */
    public function __construct(?int $minValue) {
        $this->minValue = $minValue;
    }

    public function validate(mixed $value) : ValidationResult {
       if (!is_numeric($value) || (!$this->minValue) && $value < $this->minValue) {
           return ValidationResult::invalid($value . " . isn't a valid number");
        }
        return ValidationResult::valid();
    }
}