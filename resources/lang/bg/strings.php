<?php

return [
    /*
    |--------------------------------------------------------------------------
    | BG Языковые ресурсы названий строк (Strings)
    |--------------------------------------------------------------------------
    |
    | Следующие языковые ресурсы используются в названиях
    | строк (Strings) всего вашего приложения.
    | Вы можете свободно изменять эти языковые ресурсы в соответствии
    | с требованиями вашего приложения.
    |
    */

    'backend' => [
        'access' => [
            'users' => [
                'delete_user_confirm' => 'Вы уверены, что хотите удалить этого пользователя навсегда? Если в приложении, имеются ссылки на этого пользователя, возможно это приведет к ошибкам. Действуйте на своё усмотрение!',
                'if_confirmed_off' => '(Если чекбоокс \'Подтверждён\' неактивен)',
                'no_deactivated' => 'Нет деактивированных пользователей.',
                'no_deleted' => 'Нет удаленных пользователей.',
                'restore_user_confirm' => 'Восстановить этого пользователя?',
            ],
        ],

        'dashboard' => [
            'title' => 'Административно табло за управление',
            'welcome' => 'Добре дошъл : ',
        ],

        'general' => [
            'all_rights_reserved' => 'Всички права запазени.',
            'are_you_sure' => 'Сигурен ли си?',
            'boilerplate_link' => 'Laravel 5 Boilerplate',
            'continue' => 'Продължи',
            'member_since' => 'Потребител от',
            'minutes' => ' минути',
            'search_placeholder' => 'Търси...',
            'timeout' => 'Бяхте автоматично изхвърлен от съображения за сигурност, тъй като не сте имали дейност',
           
            'see_all' => [
                'messages' => 'Вижте всички съобщения',
                'notifications' => 'Вижте всички',
                'tasks' => 'Вижте всички задачи',
                'event_uploaded' => 'Събития създадени',
                'stules_uploaded' => 'Стилове качени',
                'songs_uploaded' => 'Песни качени',
                'text_uploaded' => 'Текстове качени',
                'genres_uploaded' => 'Жанрове създадени',
                'user_register' => 'Регистрирани постребителя',
                'more_info' => 'Виж всички',
                '' => '',
            ],
            'status' => [
                'online' => 'Онлайн',
                'offline' => 'Офлайн',
				'active' => 'Активен',
				'deactive' => 'Забранен',
            ],
            'you_have' => [
                'messages' => '{0} Нямате съобщения|{1} Имате 1 съобщение|[2,Inf] Имате :number съобщения',
                'notifications' => '{0} Нямате известия|{1} Имате 1 известие|[2,Inf] Имате :number известия',
                'tasks' => '{0} Нямате задачи|{1} Имате 1 задачи|[2,Inf] Имате :number задачи',
            ],
        ],

        'search' => [
            'empty' => 'Введите слово для поиска.',
            'incomplete' => 'Вы должны подключить или создать свою систему поиска для этого приложения.',
            'results' => 'Результаты поиска :query',
            'title' => 'Результаты поиска',
        ],

        'welcome' => 'Welcome to the Dashboard',
    ],

    'emails' => [
        'auth' => [
            'account_confirmed' => 'Ваша учетная запись подтверждена.',
            'error' => 'Упс!',
            'greeting' => 'Здравствуйте!',
            'regards' => 'С уважением,',
            'trouble_clicking_button' => 'Если у вас возникли проблемы с нажатием ":action_text" кнопки, скопируйте и вставьте URL ниже в адресную строку браузера:',
            'thank_you_for_using_app' => 'Спасибо за использование нашего приложения!',
            'password_reset_subject' => 'Изменение пароля',
            'password_cause_of_email' => 'Вы получили это письмо, потому что мы получили запрос на изменение пароля для Вашей учетной записи.',
            'password_if_not_requested' => 'Если вы не запрашивали запрос на изменение пароля, игнорируйте это сообщение и  никаких дополнительных действий не требуется.',
            'reset_password' => 'Щелкните для изменения пароля',
            'click_to_confirm' => 'Щелкните здесь, чтобы подтвердить вашу учетную запись:',
        ],

        'contact' => [
            'email_body_title' => 'У вас новое сообщение формы обратной связи. Подробности ниже:',
            'subject' => 'Новое :app_name сообщение формы обратной связи!',
        ],
    ],
    'frontend' => [
        'test' => 'Тест',
        'tests' => [
            'based_on' => [
                'permission' => 'Система доступа приложения на примере применения разрешения (й) в -',
                'role' => 'Система доступа приложения на примере применения роли (ей) в -',
            ],
            'js_injected_from_controller' => 'Javascript Injected from a Controller',
            'using_access_helper' => [
                'array_permissions' => 'Access Helper с массивом названий разрешений или их ID\'s, где пользователь обладает всеми правами.',
                'array_permissions_not' => 'Access Helper с массивом названий разрешений или их ID\'s, где пользователь не обладает всеми правами.',
                'array_roles' => 'Access Helper с массивом имен ролей или их ID\'s, где пользователь обладает всеми правами.',
                'array_roles_not' => 'Access Helper с массивом имен ролей или их ID\'s, где пользователь не обладает всеми правами.',
                'permission_id' => 'Access Helper с ID названия разрешения',
                'permission_name' => 'Access Helper с названием в разрешении',
                'role_id' => 'Access Helper с ID роли',
                'role_name' => 'Access Helper с именем роли',
            ],
            'using_blade_extensions' => 'вьювере Blade Extensions',
            'view_console_it_works' => 'Сообщение console, вы должны видеть \'it works!\' which is coming from FrontendController@index',
            'you_can_see_because' => 'Вы видите это, потому что у вас роль \':role\'!',
            'you_can_see_because_permission' => 'Вы видите это, потому что у вас есть разрешение \':permission\'!',
        ],

        'general' => [
            'joined' => 'Зарегистрирован',
        ],

        'user' => [
            'change_email_notice' => 'При смене вашего нового E-mail, он будет перезаписан, и вы должны снова подтвердить свой новый E-mail.',
            'email_changed_notice' => 'Вы должны подтвердить Ваш новый E-mail, прежде чем вы сможете войти снова.',
            'password_updated' => 'Пароль изменен.',
            'profile_updated' => 'Профиль изменен.',
        ],
        'welcome_to' => 'Добре дошли в :place',
        'new_song' => 'Нови песни',
        'top_song' => 'Топ песни',
        'login_create' => 'Влезте или се регистрирайте !',
        'save_plylist' => 'Save and share your playlist with your friends when you log in or create an account.',
        'download_app' => 'Изтеглете нашето приложение',
        'download_app_info' => 'Get the apps for desktop and mobile to start listening music at anywhere and anytime.',
        '' => '',
        'db' => [
            'empty_table' => 'Няма записи в базата',
            'empty_events' => 'Няма събития към момента'
        ],
    ],
];
