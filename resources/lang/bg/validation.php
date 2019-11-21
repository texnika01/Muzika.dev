<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Языковые ресурсы для проверки значений
    |--------------------------------------------------------------------------
    |
    | Последующие языковые строки содержат сообщения по-умолчанию, используемые
    | классом, проверяющим значения (валидатором). Некоторые из правил имеют
    | несколько версий, например, size. Вы можете поменять их на любые
    | другие, которые лучше подходят для вашего приложения.
    |
    */

    'accepted' => 'Тези :attribute трябва да бъдат приети.',
    'active_url' => 'Този :attribute нее валиден URL адрес',
    'after' => 'Тази :attribute трябва да е дата след :date.',
    'alpha' => 'Това :attribute може да съдържа само букви.',
    'after_or_equal' => 'В поле :attribute должна быть дата после или равняться :date.',
    'alpha_dash' => 'Това :attribute може да съдържа само букви, цифри и тирета.',
    'alpha_num' => 'Това :attribute могат да съдържат само букви и цифри.',
    'array' => 'Това :attribute трябва да бъде масив.',
    'before' => 'Това :attribute трябва да бъде дата преди :date.',
    'before_or_equal' => 'В поле :attribute должна быть дата до или равняться :date.',
    'between' => [
        'array' => 'Това :attribute може да е между :min and :max елемента.',
        'file' => 'Това :attribute може да е между :min и :max килобайта.',
        'numeric' => 'Това :attribute може да е :min и :max.',
        'string' => 'Това :attribute може да е между :min и :max знака.',
    ],
    'boolean' => 'Това :attribute поле може да true или false.',
    'confirmed' => 'Това :attribute потвърждение не съвпада.',
    'date' => 'Полето :attribute не е дата.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'Полето :attribute не е сътветният формат :format.',
    'different' => 'Полето :attribute и :other трябва да са различни.',
    'digits' => 'Длина цифрового поля :attribute должна быть :digits.',
    'digits_between' => 'Длина цифрового поля :attribute должна быть между :min и :max.',
    'dimensions' => 'Поле :attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute содержит повторяющееся значение.',
    'email' => 'Поле :attribute должно быть действительным электронным адресом.',
    'ends_with' => 'The :attribute must end with one of the following: :values',
    'exists' => 'Выбранное значение для :attribute некорректно.',
    'file' => 'Поле :attribute должно быть файлом.',
    'filled' => 'Поле :attribute обязательно для заполнения.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'Поле :attribute должно быть изображением.',
    'in' => 'Выбранное значение для :attribute ошибочно.',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => 'Поле :attribute должно быть целым числом.',
    'ip' => 'Поле :attribute должно быть действительным IP-адресом.',
    'ipv4' => 'Поле :attribute должно быть действительным IPv4 адресом.',
    'ipv6' => 'Поле :attribute должно быть действительным IPv6 адресом.',
    'json' => 'Поле :attribute должно быть JSON строкой.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'array' => 'Количество элементов в поле :attribute не может превышать :max.',
        'file' => 'Размер файла в поле :attribute не может быть более :max Килобайт(а).',
        'numeric' => 'Поле :attribute не может быть более :max.',
        'string' => 'Количество символов в поле :attribute не может превышать :max.',
    ],
    'mimes' => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'mimetypes' => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'min' => [
        'array' => 'Количество элементов в поле :attribute должно быть не менее :min.',
        'file' => 'Размер файла в поле :attribute должен быть не менее :min Килобайт(а).',
        'numeric' => 'Поле :attribute должно быть не менее :min.',
        'string' => 'Количество символов в поле :attribute должно быть не менее :min.',
    ],
    'not_in' => 'Выбранное значение для :attribute ошибочно.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'Поле :attribute должно быть числом.',
    'present' => 'Поле :attribute должно присутствовать.',
    'regex' => 'Поле :attribute имеет ошибочный формат.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_if' => 'Поле :attribute обязательно для заполнения, когда :other равно :value.',
    'required_unless' => 'Поле :attribute обязательно для заполнения, когда :other не равно :values.',
    'required_with' => 'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_with_all' => 'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_without' => 'Поле :attribute обязательно для заполнения, когда :values не указано.',
    'required_without_all' => 'Поле :attribute обязательно для заполнения, когда ни одно из :values не указано.',
    'same' => 'Значение :attribute должно совпадать с :other.',
    'size' => [
        'array' => 'Количество элементов в поле :attribute должно быть равным :size.',
        'file' => 'Размер файла в поле :attribute должен быть равен :size Килобайт(а).',
        'numeric' => 'Поле :attribute должно быть равным :size.',
        'string' => 'Количество символов в поле :attribute должно быть равным :size.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'Поле :attribute должно быть строкой.',
    'timezone' => 'Поле :attribute должно быть действительным часовым поясом.',
    'unique' => 'Такое значение поля :attribute уже существует.',
    'uploaded' => 'Загрузка поля :attribute не удалась.',
    'url' => 'Поле :attribute имеет ошибочный формат.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Собственные языковые ресурсы для проверки значений
    |--------------------------------------------------------------------------
    |
    | Здесь Вы можете указать собственные сообщения для атрибутов.
    | Это позволяет легко указать свое сообщение для заданного правила атрибута.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'сообщение',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Собственные названия атрибутов
    |--------------------------------------------------------------------------
    |
    | Последующие строки используются для подмены программных имен элементов
    | пользовательского интерфейса на удобочитаемые. Например, вместо имени
    | поля "email" в сообщениях будет выводиться "электронный адрес".
    */

    'attributes' => [
        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'Связь с ролями',
                    'dependencies' => 'Зависимости',
                    'display_name' => 'Изобразено име',
                    'group' => 'Група',
                    'group_sort' => 'Сортирай по Групаи',
                    'groups' => [
                        'name' => 'Название Групата',
                    ],
                    'name' => 'Название',
                    'first_name' => 'Имя',
                    'last_name' => 'Фамилия',
                    'system' => 'Системный?',
                ],
                'roles' => [
                    'associated_permissions' => 'Разрешения',
                    'name' => 'Име',
                    'sort' => 'Позиция',
                ],
                'users' => [
                    'active' => 'Активен',
                    'associated_roles' => 'Роли',
                    'confirmed' => 'Подтвърден',
                    'email' => 'E-mail',
                    'name' => 'Име',
                    'last_name' => 'Фамилия',
                    'first_name' => 'Имя',
                    'other_permissions' => 'Други разрешения',
                    'password' => 'Нова парола',
                    'password_confirmation' => 'Проверка на паролата',
                    'send_confirmation_email' => 'Изпрати подтвърждение на E-mail',
                    'timezone' => 'Часови пояс',
                ],
            ],
        ],
        'frontend' => [
            'avatar' => 'Аватар',
            'email' => 'E-mail',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'name' => 'Имя',
            'password' => 'Парола',
            'password_confirmation' => 'Подтвърждение на пароля',
            'phone' => 'Телефон',
            'message' => 'Събщение',
            'new_password' => 'Нова парола',
            'new_password_confirmation' => 'Подтвърждение на новата парола',
            'old_password' => 'Стара парола',
            'timezone' => 'Часови пояс',
        ],
    ],
];
