<?php

namespace GitVersion\Exception;

use RuntimeException;

class NoSpecifiedVersionException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct("No Git Version has been specified");
    }
}