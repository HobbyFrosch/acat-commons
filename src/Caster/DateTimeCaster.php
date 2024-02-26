<?php

namespace ACAT\Commons\Caster;

use ACAT\Dto\Caster;
use DateTimeImmutable;

/**
 *
 */
class DateTimeCaster implements Caster {

    /**
     * @var string
     */
    static string $format = "Y-m-d H:i:s";

    /**
     * @param mixed $value
     * @return DateTimeImmutable
     */
    public function cast(mixed $value) : DateTimeImmutable {
        return DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $value);
    }

}