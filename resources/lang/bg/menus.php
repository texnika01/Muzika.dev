<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Языковые ресурсы названий менюшек
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
                'all' => 'Всички роли',
                'create' => 'Создать роль',
                'edit' => 'Редактировать роль',
                'management' => 'Управление доступом',
                'main' => 'Роли',
            ],
            'users' => [
                'all' => 'Все пользователи',
                'change-password' => 'Изменить пароль',
                'create' => 'Создать пользователя',
                'deactivated' => 'Заблокированные пользователи',
                'deleted' => 'Удаленные пользователи',
                'edit' => 'Редактирование учётной записи',
                'main' => 'Пользователи',
                'view' => 'Просмотр учётной записи',
            ],
        ],
        'log-viewer' => [
            'main' => 'Журнал ошибок',
            'dashboard' => 'Обзор',
            'logs' => 'Все записи',
        ],
        'sidebar' => [
            'dashboard' => 'Системная панель',
            'general' => 'Начална',
            'system' => 'Система',
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
            'ru' => 'Русский (Russian)',
            'bg' => 'Български (Български)',
            
        ],
    ],
];
