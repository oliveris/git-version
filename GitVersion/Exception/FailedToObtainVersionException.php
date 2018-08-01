<?php

namespace GitVersion\Exception;

use RuntimeException;

class FailedToObtainVersionException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct("Failed to obtain the git version string");
    }
}