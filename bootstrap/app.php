<?php

use Alisa\Skill;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

require __DIR__ . '/database.php';

$config = require __DIR__ . '/../config/app.php';
$config['assets'] = require __DIR__ . '/../config/assets.php';
$config['middlewares'] = require __DIR__ . '/../config/middlewares.php';

$app = new Skill($config);

require __DIR__ . '/../routes/main.php';

return $app;