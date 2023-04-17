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

    public function registerComponents()
    {
        return [
            \Yamobile\Services\Components\CategoriesComponent::class => 'CategoriesComponent',
            \Yamobile\Services\Components\CategoryComponent::class => 'CategoryComponent',
            \Yamobile\Services\Components\ServicesComponent::class => 'ServicesComponent',
            \Yamobile\Services\Components\ServiceComponent::class => 'ServiceComponent'

        ];

    }

}
