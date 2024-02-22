<?php

namespace ACAT\Commons\Exception;


use Throwable;

/**
 *
 */
class InfrastructureException extends BaseException {

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