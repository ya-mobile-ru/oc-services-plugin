<?php return [
    'plugin' => [
        'name' => 'Services',
        'description' => 'ОЧЕНЬ ГОВЁНЫЙ ПЛАГИН!',
        'author'=> 'Yamobile'
    ],
    'details'=> [
        'name' => 'Услуги',

    ],
    'tabs' => [
        'main' => 'Основное',
        'meta' => 'Мета-данные'
    ],
    'services'=>[
        'id' =>[
          'label' => 'Идентификатор'
        ],
        'name'=>[
            'label'=>'Название',
            'placeholder'=>'Название',
        ],
        'description'=>[
            'label'=>'Краткое описание',
            'placeholder'=>'Краткое описание',
        ],
        'image' =>[
            'label' => 'Изображение'
        ],
        'content' =>[
            'label' => 'Контент'
        ],
        'meta' => [
            'title' => [
                'label'=> 'Meta Заголовок',
                'placeholder' => ''
            ],
            'description' => [
                'label' => 'Meta Описание',
                'placeholder' => ''
            ],
            'keywords' => [
                'label' => 'Meta Ключевые слова',
                'placeholder' => ''
            ]
        ],
        'created_at' => 'Дата создания',
        'updated_at' => 'Дата обновления',
        'breadcrumb' => [
            'index' => 'Услуги',
            'update' => 'Редактирование услуги'
        ]

    ]
];