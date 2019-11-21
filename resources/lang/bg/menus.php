<?php

return [
    /*
    |--------------------------------------------------------------------------
    | BG Языковые ресурсы названий менюшек
    |--------------------------------------------------------------------------
    |
    | Следующие языковые ресурсы используются в названиях
    | менюшек всего вашего приложения.
    | Вы можете свободно изменять эти языковые ресурсы в соответствии
    | с требованиями вашего приложения.
    |
    */

    'backend' => [
        'access' => [
            'title' => 'Администрация',
            'roles' => [
                'all'        => 'Всички роли',
                'create'     => 'Създаване на роля',
                'edit'       => 'Редактиране на ролята',
                'management' => 'Управление на ролите',
                'main'       => 'Роли',
            ],
            'users' => [
                'all'             => 'Всички потребители',
                'change-password' => 'Промяна на паролата',
                'create'          => 'Създаване на потребител',
                'deactivated'     => 'Деактивирани потребители',
                'deleted'         => 'Изтрити потребители',
                'edit'            => 'Редактиране на потребител',
                'main'            => 'Потребители',
                'view'            => 'Преглед на потребителя',
            ],
        ],
        'log-viewer' => [
            'main'      => 'Преглед на логовете',
            'dashboard' => 'Табло',
            'logs'      => 'Логове',
            'stat'      => 'Статистика',
        ],
        'sidebar' => [
            'dashboard' => 'Табло',
            'general'   => 'Общ',
            'system'    => 'Системен',
            'page'    => 'Страници',
        ],
        'sidebar_page' =>[
			'event' => 'Събития',
			'song' => 'Песни',
			'style' => 'Стилове',
			'text' => 'Текстове',
			'genres' => 'Жанрове',
			'' => '',
		],
    ],
    'language-picker' => [
        'language' => 'Език',
        /*
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            
            'en' => 'Английский (English)',
            'bg' => 'Български(Bulgarian)',
            'ru' => 'Русский (Russian)',
            
        ],
    ],
];
