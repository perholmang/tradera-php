<?php

namespace Holmang\Tradera\Exceptions;

class QuotaExceededException extends \Exception
{
    public function __construct(\SoapFault $fault)
    {
        parent::__construct();
    }

}