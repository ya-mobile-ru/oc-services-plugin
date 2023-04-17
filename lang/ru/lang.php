<?php return [
    'plugin' => [
        'name' => 'Услуги',
        'description' => 'Плагин позволяет вывести услуги на сайт.',
        'author'=> 'Yamobile'
    ],
    'navigation'=> [
        'service_menu' => 'Услуги',
        'side_menu_categories' => 'Категории',
        'side_menu_services' => 'Услуги',
    ],
    'services'=>[
        'tabs' => [
            'main' => 'Основное',
            'meta' => 'Мета-данные'
        ],
        'id' =>[
          'label' => 'Идентификатор'
        ],
        'name'=> [
            'label'=>'Название',
            'placeholder'=>'Введите название',
        ],
        'slug'=> [
            'label'=>'Ссылка',
        ],
        'category' => [
           'label' => 'Связанная категория'
        ],
        'description'=> [
            'label'=>'Краткое описание',
            'placeholder'=>'Введите краткое описание',
        ],
        'image' => [
            'label' => 'Изображение'
        ],
        'content' => [
            'label' => 'Контент'
        ],
        'meta' => [
            'title' => [
                'label'=> 'Meta Заголовок',
                'placeholder' => 'Введите заголовок для SEO'
            ],
            'description' => [
                'label' => 'Meta Описание',
                'placeholder' => 'Введите описание для SEO'
            ],
            'keywords' => [
                'label' => 'Meta Ключевые слова',
                'placeholder' => 'Введите ключевые слова для SEO'
            ]
        ],
        'created_at' => 'Дата создания',
        'updated_at' => 'Дата обновления',
    ],
    'breadcrumb' => [
        'categories' => [
            'index' => 'Категории услуг',
            'update' => 'Редактирование категории',
            'create' => 'Создание категории',
            'preview' => 'Превью категории'
        ],
        'services' => [
            'index' => 'Услуги',
            'update' => 'Редактирование услуги',
            'create' => 'Создание услуги',
            'preview' => 'Превью услуги'
        ]
    ],
    'components' => [
        'category'=>[
            'name' => 'Категория услуги',
            'description' => 'Компонент для вывода детальной информации об услуге.',
            'properties' => [
                'slug'=>[
                    'title' => 'Текущий URL',
                    'description' => 'Параметр отвечает за получение записи по части URL.'
                ]
            ]
        ],
        'categories'=>[
            'name' => 'Все категории',
            'description' => 'Компонент для вывода краткой информации об услуге.',
            'properties' => [
                'items'=>[
                    'title' => 'Количество записей',
                    'description' => 'Параметр отвечает за количество выводимых записе, если нужно вывести все напишите - all.'
                ]
            ]
        ],
        'service'=>[
            'name' => 'Услуга',
            'description' => 'Компонент для вывода детальной информации об подуслуге.',
            'properties' => [
                'category'=>[
                    'title' => 'URL Родителя',
                    'description' => 'Параметр отвечает за динамический URL предыдущей записи.'
                ],
                'slug'=>[
                    'title' => 'Текущий URL',
                    'description' => 'Параметр отвечает за получение текущей записи по части URL.'
                ]
            ]
        ],
        'services'=>[
            'name' => 'Услуги',
            'description' => 'Компонент для вывода краткой информации об подуслуге.',
            'properties' => [
                'items'=>[
                    'title' => 'Количество записей',
                    'description' => 'Параметр отвечает за количество выводимых записе, если нужно вывести все напишите - all.'
                ]
            ]
        ]

    ],
    'system' => [
        'no_data' => 'Нет данных'
    ]
];