<?php

namespace GitVersion;

class GitVersion
{
    /**
     * Method getVersion()
     * --------------------------------
     *
     * Gets the latest version in the project
     *
     */
    public static function getVersion()
    {
        $output = shell_exec('git describe --always --tags --dirty --abbrev=0');

        if ($output === null) {
            throw new Exception\FailedToObtainVersionException;
        }

        return trim($output);
    }
}