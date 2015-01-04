<?php
/**
 * Copyright (C) 2015 David Young
 *
 * Boots up our application with a console kernel
 */
require_once __DIR__ . "/../../vendor/autoload.php";
require_once __DIR__ . "/../../configs/php.php";

$application = require_once __DIR__ . "/../../configs/application.php";
$application->start();
// TODO: Implement
$application->shutdown();