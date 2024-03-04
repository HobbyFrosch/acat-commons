<?php

namespace ACAT\Commons\Caster;

use ACAT\Dto\Caster;
use Symfony\Component\Uid\Uuid;
use ACAT\Commons\Exception\InvalidArgumentException;

/**
 *
 */
class UuidCaster implements Caster {

    /**
     * @param mixed $value
     * @return Uuid|null
     * @throws InvalidArgumentException
     */
    public function cast(mixed $value) : ?Uuid {
        if (!$value) {
            return null;
        }
        if (!Uuid::isValid($value)) {
            throw new InvalidArgumentException($value . ' is not a valid Uuid');
        }
        return Uuid::fromString($value);
    }

}