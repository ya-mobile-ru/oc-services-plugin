<?php

declare(strict_types = 1);

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\ServiceSettings;

class ServiceSettingsComponent extends ComponentBase
{
    public array $settings;

    public function componentDetails(): array
    {
        return [
            'name' => 'yamobile.services::lang.components.service_settings.name',
            'description' => 'yamobile.services::lang.components.service_settings.description'
        ];
    }

    public function onRun(): void
    {
        $this->settings = $this->getServicesSettings();
    }

    private function getServicesSettings(): array
    {
        return [
            'image' => ServiceSettings::get('image'),
            'description' => ServiceSettings::get('description'),
            'h1' => ServiceSettings::get('h1'),
            'meta_title' => ServiceSettings::get('meta_title'),
            'meta_keywords' => ServiceSettings::get('meta_keywords'),
            'meta_description' => ServiceSettings::get('meta_description'),
        ];
    }
}
