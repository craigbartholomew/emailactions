<?php

namespace App\EmailActions\Exceptions;

use Throwable;

class HandlerNotExistsException extends \Exception
{
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct("No handefined for $message", $code, $previous);
    }
}
