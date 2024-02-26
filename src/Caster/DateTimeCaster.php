<?php

namespace ACAT\Commons\Caster;

use DateTimeImmutable;
use Spatie\DataTransferObject\Caster;

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