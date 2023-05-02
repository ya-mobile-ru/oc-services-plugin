<?php

namespace Yamobile\Services;

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

    public function registerSettings()
    {
        return [
            'location' => [
                'label' => 'yamobile.services::lang.settings.service.label',
                'description' => 'yamobile.services::lang.settings.service.description',
                'category' => 'yamobile.services::lang.settings.service.category',
                'icon' => 'icon-folder',
                'class' => \Yamobile\Services\Models\ServiceSettings::class,
                'order' => 500,
                'keywords' => 'yamobile.services::lang.settings.service.keywords'
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            \Yamobile\Services\Components\CategoriesComponent::class => 'CategoriesComponent',
            \Yamobile\Services\Components\CategoryComponent::class => 'CategoryComponent',
            \Yamobile\Services\Components\ServicesComponent::class => 'ServicesComponent',
            \Yamobile\Services\Components\ServiceComponent::class => 'ServiceComponent',
            \Yamobile\Services\Components\ServiceSettingsComponent::class => 'ServiceSettings',

        ];

    }

}
