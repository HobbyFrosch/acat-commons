<?php

namespace ACAT\Commons\Exception;


use Throwable;
use JetBrains\PhpStorm\Pure;

/**
 *
 */
class AuthorizeException extends BaseException {
    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = "", int $code = 400, ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}