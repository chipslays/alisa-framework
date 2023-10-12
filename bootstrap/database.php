<?php

use Alisa\Support\Container as AlisaContainer;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$config = require __DIR__ . '/../config/database.php';

$capsule->addConnection($config['connections'][$config['default']]);

$capsule->setEventDispatcher(new Dispatcher(new Container));

$capsule->setAsGlobal();

$capsule->bootEloquent();

AlisaContainer::getInstance()->singleton(Capsule::class, fn () => $capsule);