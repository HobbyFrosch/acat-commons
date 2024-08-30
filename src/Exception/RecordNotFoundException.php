<?php

namespace ACAT\Commons\Exception;

use Throwable;

/**
 *
 */
class RecordNotFoundException extends BaseException
{

    /**
     * @param   string          $message
     * @param   int             $code
     * @param   Throwable|null  $previous
     */
    public function __construct(string $message = "", int $code = 401, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }


}