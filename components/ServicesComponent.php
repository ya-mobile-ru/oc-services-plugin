<?php

declare(strict_types = 1);

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\Service;

class ServicesComponent extends ComponentBase
{

    public Service $services;

    public function componentDetails(): array
    {
        return [
            'name' => 'yamobile.services::lang.components.services.name',
            'description' => 'yamobile.services::lang.components.services.description',
        ];
    }

    public function defineProperties(): array
    {
        return [
            'items' => [
                'title'       => 'yamobile.services::lang.components.services.properties.items.title',
                'description' => 'yamobile.services::lang.components.services.properties.items.description',
                'default'     => '6',
            ],
        ];
    }

    public function onRun(): void
    {

        $this->services = $this->loadServices();

    }

    private function loadServices(): Service
    {

        $items = $this->property('items');
        $services = Service::where('is_enabled', true);


        if($items){
            return $services->paginate($items);
        }

        return $services->get();

    }
}
