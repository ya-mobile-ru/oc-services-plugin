<?php return [
    'plugin' => [
        'name' => 'Services',
        'description' => 'Плагин позволяет вывести услуги на сайт.',
        'author'=> 'Yamobile'
    ],
    'navigation'=> [
        'service_menu' => 'Услуги',
        'side_menu_services' => 'Услуги',
        'side_menu_subservices' => 'Под услуги',
    ],
    'tabs' => [
        'main' => 'Основное',
        'meta' => 'Мета-данные'
    ],
    'services'=>[
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
        'service' => [
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
        'services' => [
            'index' => 'Услуги',
            'update' => 'Редактирование услуги',
            'create' => 'Создание услуги',
            'preview' => 'Превью услуги'
        ],
        'subservices' => [
            'index' => 'Под услуги',
            'update' => 'Редактирование под услуги',
            'create' => 'Создание под услуги',
            'preview' => 'Превью под услуги'
        ]
    ],
    'components' => [
        'detail_services'=>[
            'name' => 'Услуги',
            'description' => 'Компонент для вывода детальной информации об услуге.',
            'properties' => [
                'slug'=>[
                    'title' => 'Текущий URL',
                    'description' => 'Параметр отвечает за получение записи по части URL.'
                ]
            ]
        ],
        'preview_services'=>[
            'name' => 'Превью услуг',
            'description' => 'Компонент для вывода краткой информации об услуге.',
            'properties' => [
                'items'=>[
                    'title' => 'Количество записей',
                    'description' => 'Параметр отвечает за количество выводимых записе, если нужно вывести все напишите - all.'
                ]
            ]
        ],
        'detail_subservices'=>[
            'name' => 'Под услуги',
            'description' => 'Компонент для вывода детальной информации об подуслуге.',
            'properties' => [
                'service'=>[
                    'title' => 'URL Родителя',
                    'description' => 'Параметр отвечает за динамический URL предыдущей записи.'
                ],
                'slug'=>[
                    'title' => 'Текущий URL',
                    'description' => 'Параметр отвечает за получение текущей записи по части URL.'
                ]
            ]
        ],
        'preview_subservices'=>[
            'name' => 'Превью подуслуг',
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