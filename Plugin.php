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
            'author' => 'Yamobile',
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
