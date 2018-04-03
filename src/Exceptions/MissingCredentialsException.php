<?php

namespace Holmang\Tradera\Exceptions;

class MissingCredentialsException extends \Exception
{

    /**
     * MissingCredentialsException constructor.
     */
    public function __construct($message)
    {
        parent::__construct($message);
    }
}