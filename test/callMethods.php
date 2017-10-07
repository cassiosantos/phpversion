<?php


require __DIR__ . "/../vendor/autoload.php";

use GustavoWeb\PHPVersion\PHPVersion;

$version = new PHPVersion;

//echo $version->getPhpVersion();

$version->getPhpInfo();

