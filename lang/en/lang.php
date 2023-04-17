<?php return [
    'plugin' => [
        'name' => 'Services',
        'description' => 'The plugin allows you to bring categories to the site',
        'author'=> 'Yamobile'
    ],
    'navigation'=> [
        'service_menu' => 'Services',
        'side_menu_services' => 'Categories',
        'side_menu_subservices' => 'Services',
    ],
    'services'=>[
        'tabs' => [
            'main' => 'Basic',
            'meta' => 'Meta-data'
        ],
        'id' =>[
          'label' => 'ID'
        ],
        'name'=> [
            'label'=>'Name',
            'placeholder'=>'Enter a name',
        ],
        'slug'=> [
            'label'=>'URL',
        ],
        'category' => [
            'label' => 'Related category'
        ],
        'description'=> [
            'label'=>'Short description',
            'placeholder'=>'Enter a short description',
        ],
        'image' => [
            'label' => 'Image'
        ],
        'content' => [
            'label' => 'Content'
        ],
        'meta' => [
            'title' => [
                'label'=> 'Meta Title',
                'placeholder' => 'Enter a title for SEO'
            ],
            'description' => [
                'label' => 'Meta Description',
                'placeholder' => 'Enter a description for SEO'
            ],
            'keywords' => [
                'label' => 'Meta Keywords',
                'placeholder' => 'Enter keywords for SEO'
            ]
        ],
        'created_at' => 'Date of creation',
        'updated_at' => 'Update date',
    ],
    'breadcrumb' => [
        'categories' => [
            'index' => 'Categories',
            'update' => 'Editing category',
            'create' => 'Creating category',
            'preview' => 'Preview category'
        ],
        'services' => [
            'index' => 'Services',
            'update' => 'Editing service',
            'create' => 'Creating service',
            'preview' => 'Preview services'
        ]
    ],
    'components' => [
        'detail_services'=>[
            'name' => 'Categories',
            'description' => 'Component for displaying detailed information about the category.',
            'properties' => [
                'slug'=>[
                    'title' => 'Current URL',
                    'description' => 'The parameter is responsible for getting the record by part of the URL.'
                ]
            ]
        ],
        'preview_services'=>[
            'name' => 'Preview categories',
            'description' => 'Component for displaying brief information about categories',
            'properties' => [
                'items'=>[
                    'title' => 'Number of entries',
                    'description' => 'The parameter is responsible for the number of output records, if you need to output all, write - all.'
                ]
            ]
        ],
        'detail_subservices'=>[
            'name' => 'Services',
            'description' => 'Component for displaying detailed information about a sub-category.',
            'properties' => [
                'category'=>[
                    'title' => 'Parent URL',
                    'description' => 'The parameter is responsible for the dynamic URL of the previous record.'
                ],
                'slug'=>[
                    'title' => 'Current URL',
                    'description' => 'The parameter is responsible for getting the current record by part of the URL.'
                ]
            ]
        ],
        'preview_subservices'=>[
            'name' => 'Preview services',
            'description' => 'Component for displaying brief information about a service',
            'properties' => [
                'items'=>[
                    'title' => 'Number of entries',
                    'description' => 'The parameter is responsible for the number of output records, if you need to output all, write - all.'
                ]
            ]
        ]

    ],
    'system' => [
        'no_data' => 'No data available'
]
];