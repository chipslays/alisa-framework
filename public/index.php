<?php

use Alisa\Skill;

require __DIR__ . '/../vendor/autoload.php';

/** @var Skill */
$app = require __DIR__ . '/../bootstrap/app.php';

$app->run();