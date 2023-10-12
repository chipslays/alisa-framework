<?php

namespace App\Models;

use Alisa\Skill;
use Alisa\Support\Container;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'is_guest',
        'options',
    ];

    protected $casts = [
        'options' => 'array',
    ];

    protected $attributes = [
        'options' => '[]',
    ];

    public static function current(): User
    {
        $app = Container::getInstance()->make(Skill::class);

        $userId = $app->request()->get('session.user.user_id');

        $guest = false;

        if (!$userId) {
            $userId = $app->request()->get('session.application_id.application_id');
            $guest = true;
        }

        return self::query()->createOrFirst([
            'id' => $userId,
        ], [
            'is_guest' => $guest,
        ]);
    }
}