<?php

return [
    'skill_id' => null,

    'token' => null,

    'storage' => __DIR__ . '/../storage/globals',

    'images' => __DIR__ . '/../storage/images',

    'event' => [
        'request' => [
            'command' => 'ban user 123',
            // 'original_utterance' => 'ping',
            'markup' => [
                'dangerous_context' => false,
            ],
            'type' => 'SimpleUtterance',
            'nlu' => [
                'entities' => [
                    [
                        'type' => 'YANDEX.DATETIME',
                        'tokens' => [
                            'start' => 0,
                            'end' => 3
                        ],
                        'value' => [
                            'year' => 2023,
                            'month' => 3,
                            'day' => 24,
                            'year_is_relative' => false,
                            'month_is_relative' => false,
                            'day_is_relative' => false,
                        ],
                    ]
                ],
            ],
        ],
        'session' => [
            'new' => false,
            'message_id' => 4,
            'session_id' => '2eac4854-fce721f3-b845abba-20d60',
            'skill_id' => '3ad36498-f5rd-4079-a14b-788652932056',
            'user' => [
                'user_id' => '6C91DA5198D1758C6A9F63A7C5CDDF09359F683B13A18A151FBF4C8B092BB0C2',
            ],
            'application' => [
                'application_id' => '47C73714B580ED2469056E71081159529FFC676A4E5B059D629A819E857DC2F8',
            ],
        ],
        'state' => [
            'session' => [
              'value' => 'session value',
            //   'scene' => 'test scene',
            ],
            'application' => [
              'value' => 'application value',
            ],
            'user' => [
              'value' => 'user value',
            ],
        ],
    ],
];