<?php

include "../vendor/autoload.php";

use GitVersion\GitVersion;

echo 'Returns a string value of the Git Version.';
echo '<pre>';
echo GitVersion::getLatestVersion();
echo '</pre>';

echo '<br><hr><br>';

echo 'Returns a date string the version was created at. A date format can be passed into the method as an optional parameter.';
$git_version = GitVersion::getLatestVersion();
echo '<pre>';
echo GitVersion::getVersionDate($git_version, 'd-m-Y');
echo '</pre>';