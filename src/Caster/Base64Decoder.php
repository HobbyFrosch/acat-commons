<?php

namespace ACAT\Commons\Caster;

use ACAT\Dto\Caster;
use ACAT\Commons\Exception\InvalidArgumentException;

class Base64Decoder implements Caster
{

    /**
     * @param   mixed  $value
     *
     * @return string|null
     * @throws InvalidArgumentException
     */
    public function cast(mixed $value) : ?string
    {
        if ($value && is_string($value)) {
            if ( ! $value = base64_decode($value, true)) {
                throw new InvalidArgumentException('Invalid Base64 Format');
            }
        }
        return $value;
    }
}