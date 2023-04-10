<?php namespace Yamobile\Services;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name' => 'yamobile.services::lang.plugin.name',
            'description' => 'yamobile.services::lang.plugin.description',
            'author' => 'yamobile.services::lang.plugin.author',
            'icon' => 'icon-folder',
            'homepage' => 'https://github.com/ya-mobile-ru/oc-services-plugin',
        ];
    }

    public function registerNavigation()
    {
        return [
            'Services-Menu' => [
                'label' => 'yamobile.services::lang.details.name',
                'url' => Backend::url('yamobile/services/services'),
                'icon' => 'icon-folder',
                'sideMenu' => [
                    'Side-Menu-Services'=> [
                        'label' => 'Услуги',
                        'url' => Backend::url('yamobile/services/services'),
                        'icon' => 'icon-sitemap'
                    ],
                    'Side-Menu-Subservices' => [
                        'label' => 'Подуслуги',
                        'url' => Backend::url('yamobile/services/subservices'),
                        'icon' => 'icon-list'
                    ]

                ]
            ],
        ];
    }

    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
}
