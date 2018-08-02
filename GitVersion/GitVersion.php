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
     * @return false|string
     */
    public static function getLatestVersion()
    {
        $output = shell_exec('git describe --always --tags --abbrev=0');

        if ($output === null) {
            throw new Exception\FailedToObtainVersionException;
        }

        return trim($output);
    }

    /**
     * Method getVersionDate()
     * --------------------------------
     *
     * Gets the date of
     *
     * @param $version
     * @param string $date_format
     * @return false|string
     */
    public static function getVersionDate($version, $date_format = 'd-m-Y H:i:s')
    {
        if ($version === null) {
            throw new Exception\NoSpecifiedVersionException;
        }

        $output = shell_exec('git log -1 --format=%ai ' . $version);

        if ($output === null) {
            throw new Exception\FailedToObtainVersionException;
        }

        return date($date_format, strtotime($output));
    }
}