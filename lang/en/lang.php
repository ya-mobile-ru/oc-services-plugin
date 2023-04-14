<?php return [
    'plugin' => [
        'name' => 'Services',
        'description' => 'The plugin allows you to bring services to the site',
        'author'=> 'Yamobile'
    ],
    'navigation'=> [
        'service_menu' => 'Services',
        'side_menu_services' => 'Services',
        'side_menu_subservices' => 'Subservices',
    ],
    'tabs' => [
        'main' => 'Basic',
        'meta' => 'Meta-data'
    ],
    'services'=>[
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
        'service' => [
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
        'services' => [
            'index' => 'Services',
            'update' => 'Editing service',
            'create' => 'Creating service',
            'preview' => 'Preview service'
        ],
        'subservices' => [
            'index' => 'Subservices',
            'update' => 'Editing subservice',
            'create' => 'Creating subservice',
            'preview' => 'Preview subservices'
        ]
    ],
    'components' => [
        'detail_services'=>[
            'name' => 'Services',
            'description' => 'Component for displaying detailed information about the service.',
            'properties' => [
                'slug'=>[
                    'title' => 'Current URL',
                    'description' => 'The parameter is responsible for getting the record by part of the URL.'
                ]
            ]
        ],
        'preview_services'=>[
            'name' => 'Preview services',
            'description' => 'Component for displaying brief information about services',
            'properties' => [
                'items'=>[
                    'title' => 'Number of entries',
                    'description' => 'The parameter is responsible for the number of output records, if you need to output all, write - all.'
                ]
            ]
        ],
        'detail_subservices'=>[
            'name' => 'Subservices',
            'description' => 'Component for displaying detailed information about a sub-service.',
            'properties' => [
                'service'=>[
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
            'name' => 'Preview subservices',
            'description' => 'Component for displaying brief information about a subservice',
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