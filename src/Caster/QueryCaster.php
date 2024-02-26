<?php

namespace ACAT\Commons\Caster;

use Exception;
use ACAT\Dto\Caster;
use ACAT\Commons\Exception\InvalidArgumentException;

/**
 *
 */
class QueryCaster implements Caster {

    /**
     * @param mixed $value
     * @return array
     * @throws Exception
     */
    public function cast(mixed $value): array {

        if (!$queryValues = json_decode($value, JSON_OBJECT_AS_ARRAY)) {
            return [];
        }

        foreach ($queryValues as $param) {
            if (!array_key_exists('key', $param) ||
                !array_key_exists('value', $param) ||
                empty($param['key'])) {
                throw new InvalidArgumentException('invalid query');
            }
        }

        return $queryValues;

    }
}