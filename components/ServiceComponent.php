<?php

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\Service;
use Yamobile\Services\Models\Category;

class ServiceComponent extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.services::lang.components.service.name',
            'description' => 'yamobile.services::lang.components.service.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'category_slug' => [
                'title' => 'yamobile.services::lang.components.service.properties.category.title',
                'description' => 'yamobile.services::lang.components.service.properties.category.description',
                'default' => '{{ :category_slug }}',
                'type' => 'string'
            ],
            'slug' => [
                'title'       => 'yamobile.categories::lang.components.service.properties.slug.title',
                'description' => 'yamobile.categories::lang.components.service.properties.slug.description',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
        ];
    }

    public function onRun()
    {

        $this->service = $this->loadService();

        if(!$this->service || ($this->service->category['slug'] !== $this->property('category_slug'))) {
            $this->setStatusCode(404);
            return $this->controller->run('404');
        }

    }

        $slug = $this->property('slug');
        $service = $this->property('category_slug');

        return Service::where('slug',$slug)->first();

    }

}