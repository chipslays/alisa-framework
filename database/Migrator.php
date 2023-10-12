<?php

use Alisa\Support\Container;
use Illuminate\Database\Capsule\Manager;

require __DIR__ . '/../vendor/autoload.php';

class Migrator
{
    public static function up()
    {
        require __DIR__ . '/../bootstrap/database.php';

        /** @var Manager */
        $capsule = Container::getInstance()->make(Manager::class);

        foreach (glob(__DIR__ . '/migrations/*.php') as $file) {
            $migration = require $file;
            $migration->up($capsule->schema());
            echo 'up...' . basename($file) . PHP_EOL;
        }
    }

    public static function down()
    {
        require_once __DIR__ . '/../bootstrap/database.php';

        /** @var Manager */
        $capsule = Container::getInstance()->make(Manager::class);

        foreach (array_reverse(glob(__DIR__ . '/migrations/*.php')) as $file) {
            $migration = require $file;
            $migration->down($capsule->schema());
            echo 'down...' . basename($file) . PHP_EOL;
        }
    }

    public static function fresh()
    {
        self::down();
        self::up();
    }
}