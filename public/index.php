<?php

define('ALISA_START', time());

require __DIR__ . '/../vendor/autoload.php';

/** @var \Alisa\Skill */
$app = require __DIR__ . '/../bootstrap/app.php';

$app->run();