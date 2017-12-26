<?php
/**
 * Created by PhpStorm.
 * User: m.mesripour
 * Date: 2017-02-11
 * Time: 8:57 AM
 */

# set telegram bot commands
$command = [
    'message' => [
        '/start' => 'start',
        'درباره ما' => 'about',
        'تماس با ما' => 'contact',
        'فروشگاه ها' => 'shops',
        'دسته بندی ها' => 'categories',
        'اخبار' => 'news',
        '🔙 بازگشت به منو اصلی' => 'home',
        '❗️ راهنما' => 'help',

        'deepLinkParameters' => [
            'game' => 'hubShowGame',
            'ads' => 'ads',
        ],
        'addContact' => 'addContact'
    ],
    'callback' => [
        'game' => 'playGame',
        'data' => [
            'subscribe' => 'subscribe',
        ]
    ],
    'inline' => [
        '' => 'gameList',
    ]
];
