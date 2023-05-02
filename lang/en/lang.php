<?php return [
    'plugin' => [
        'name' => 'Services',
        'description' => 'The plugin allows you to bring categories to the site',
        'author'=> 'Yamobile'
    ],
    'navigation'=> [
        'service_menu' => 'Services',
        'side_menu_categories' => 'Categories',
        'side_menu_services' => 'Services',
        'side_menu_prices' => 'Prices',
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
        'is_enabled'=>[
            'label' => 'Activity',
            'on' => 'On',
            'off' => 'Off'
        ],
        'slug'=> [
            'label'=>'URL',
        ],
        'price' => [
            'label' => 'Price',
            'placeholder'=>'Enter the price in any format',
        ],
        'category' => [
            'label' => 'Related category'
        ],
        'categories' => [
            'label' => 'Related categories'
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
            'seo_name' => [
                'label' => 'H1 Header',
                'placeholder' => 'Enter the H1 header for SEO'
            ],
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
        'prices' => [
            'label' => 'Prices'
        ],
        'sort_order' => 'Sorting',
        'created_at' => 'Date of creation',
        'updated_at' => 'Update date',
    ],
    'breadcrumb' => [
        'categories' => [
            'index' => 'Categories',
            'update' => 'Editing category',
            'create' => 'Creating category',
            'preview' => 'Preview category',
            'reorder' => 'Sorting categories'
        ],
        'services' => [
            'index' => 'Services',
            'update' => 'Editing service',
            'create' => 'Creating service',
            'preview' => 'Preview services',
            'reorder' => 'Sorting services'
        ],
        'prices' => [
            'index' => 'Prices',
            'update' => 'Price editing',
            'create' => 'Creating price',
            'preview' => 'Price preview',
            'reorder' => 'Sorting price'
        ]
    ],
    'settings' => [
        'service' => [
            'label' => 'Home page of services',
            'description' => 'Changing the data of the main page of all services.',
            'category' => 'Content',
            'keywords' => 'services, categories of services'
        ]
    ],
    'components' => [
        'category'=>[
            'name' => 'Categories',
            'description' => 'Component for displaying detailed information about the category.',
            'properties' => [
                'slug'=>[
                    'title' => 'Current URL',
                    'description' => 'The parameter is responsible for getting the record by part of the URL.'
                ]
            ]
        ],
        'categories'=>[
            'name' => 'Preview categories',
            'description' => 'Component for displaying brief information about categories',
            'properties' => [
                'items'=>[
                    'title' => 'Number of entries',
                    'description' => 'The parameter is responsible for the number of output records, if you need to output all, write - all.'
                ]
            ]
        ],
        'service'=>[
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
        'services'=>[
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