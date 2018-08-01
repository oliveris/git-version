<?php

include "../vendor/autoload.php";

use GitVersion\GitVersion;

// example that returns the git version as a string
echo 'Returns a string value of the Git Version.';
echo '<pre>';
echo GitVersion::getVersion();
echo '</pre>';