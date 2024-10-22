<?php

namespace ACAT\Commons\Caster;

use ACAT\Dto\Caster;

/**
 *
 */
class Base64Encoder implements Caster
{

    /**
     * @param   mixed  $value
     *
     * @return mixed
     */
    public function cast(mixed $value) : mixed
    {
        if ($value && is_string($value)) {
            $value = base64_encode($value);
        }
        return $value;
    }
}