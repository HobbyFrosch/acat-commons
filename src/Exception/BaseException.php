<?php

namespace ACAT\Commons\Exception;

use Exception;
use JetBrains\PhpStorm\Pure;
use Throwable;

/**
 *
 */
class BaseException extends Exception {

    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    #[Pure]
    public function __construct(string $message = "", int $code = 500, ?Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

}