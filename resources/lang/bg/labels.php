<?php

return [
    /*
    |--------------------------------------------------------------------------
    | БГ Языковые ресурсы названий Labels
    |--------------------------------------------------------------------------
    |
    | Следующие языковые ресурсы используются в названиях
    | Labels всего вашего приложения.
    | Вы можете свободно изменять эти языковые ресурсы в соответствии
    | с требованиями вашего приложения.
    |
    */

    'general' => [
        'all' => 'Всички',
        'yes' => 'Да',
        'no' => 'Не',
        'copyright' => 'Copyright',
        'custom' => 'Персонализиран',
        'actions' => 'Действие',
        'active' => 'Активиран',
        'buttons' => [
            'save' => 'Сохрани',
            'update' => 'Обнови',
        ],
        'hide' => 'Скрий',
        'inactive' => 'Неактивен',
        'none' => 'Не',
        'show' => 'Покажи',
        'toggle_navigation' => 'Навигация',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Създай нова роля',
                'edit' => 'Редактирай ролята',
                'management' => 'Достъп',
                'table' => [
                    'number_of_users' => 'Потребители',
                    'permissions' => 'Разрешения',
                    'role' => 'Роли',
                    'sort' => 'Позиция',
                    'total' => 'роли всего|всего роли',
                ],
            ],
            'users' => [
                'active' => 'Активни потребители',
                'all_permissions' => 'Пълен достъп',
                'change_password' => 'Промени паролата',
                'change_password_for' => 'Промени паролата на :user',
                'create' => 'Създай учётную запис',
                'deactivated' => 'Забранени потребители',
                'deleted' => 'Изтрити потребители',
                'edit' => 'Редактиране на учётной запис',
                'management' => 'Потребители',
                'no_permissions' => 'Няма разрешение',
                'no_roles' => 'Невъзможно е да придообиете роля',
                'permissions' => 'Разрешение',
                'table' => [
                    'confirmed' => 'Потвърден',
                    'created' => 'Създаден',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Обновен',
                    'name' => 'Логин',
                    'first_name' => 'Имя',
                    'last_name' => 'Фамилия',
                    'no_deactivated' => 'Няма забранени потребители',
                    'no_deleted' => 'Няма изтрити потребители',
                    'other_permissions' => 'Други Разрешения',
                    'permissions' => 'Разрешения',
                    'roles' => 'Роли',
                    'social' => 'Социални акаунти',
                    'total' => 'потребители общо|общо потребители',
                ],
                'tabs' => [
                    'titles' => [
                        'history' => 'История',
                        'overview' => 'Преглед',
                    ],
                    'content' => [
                        'overview' => [
                            'avatar' => 'Аватар',
                            'confirmed' => 'Потвърден',
                            'created_at' => 'Създаден',
                            'deleted_at' => 'Изтрит',
                            'email' => 'E-mail',
                            'last_login_at' => 'Последно влязъл на',
                            'last_login_ip' => 'Последно влязъл от IP',
                            'last_updated' => 'Последно обновен',
                            'name' => 'Вход',
                            'first_name' => 'Име',
                            'last_name' => 'Фамилия',
                            'status' => 'Статус',
                            'timezone' => 'Timezone',
                        ],
                    ],
                ],
                'view' => 'Виж учётной записи',
            ],
        ],
    ],
    'frontend' => [
        'auth' => [
            'login_box_title' => 'Вход',
            'login_button' => 'Вход',
            'login_with' => 'Вход чрез :social_media',
            'register_box_title' => 'Регистрация',
            'register_button' => 'Регистрирай се',
            'remember_me' => 'Запомни ме',
        ],

        'contact' => [
            'box_title' => 'Контакт',
            'button' => 'Изпрати',
        ],

        'passwords' => [
            'expired_password_box_title' => 'Срока на действие на паролата ви изтече',
            'forgot_password' => 'Забрави паролата си ?',
            'reset_password_box_title' => 'Възтанови паролата си',
            'reset_password_button' => 'Промени паролата',
            'update_password_button' => 'Обнови паролата',
            'send_password_reset_link_button' => 'Изпрати',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Промени паролата',
            ],
            'profile' => [
                'avatar' => 'Аватар',
                'created_at' => 'Създаде на',
                'edit_information' => 'Редактиране на информацията',
                'email' => 'E-mail',
                'last_updated' => 'Обновен',
                'name' => 'Логин',
                'first_name' => 'Имя',
                'last_name' => 'Фамилия',
                'update_information' => 'Обновяване на информацията',
            ],
        ],
    ],
];
