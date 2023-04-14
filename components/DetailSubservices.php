<?php

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\Subservice;
use Yamobile\Services\Models\Service;

class DetailSubservices extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.services::lang.components.detail_subservices.name',
            'description' => 'yamobile.services::lang.components.detail_subservices.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'service' => [
                'title' => 'yamobile.services::lang.components.detail_subservices.properties.service.title',
                'description' => 'yamobile.services::lang.components.detail_subservices.properties.service.description',
                'default' => '{{ :service }}',
                'type' => 'string'
            ],
            'slug' => [
                'title'       => 'yamobile.services::lang.components.detail_subservices.properties.slug.title',
                'description' => 'yamobile.services::lang.components.detail_subservices.properties.slug.description',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
        ];
    }

    public function getSubserviceByUrl(){

        $slug = $this->property('slug');
        $service = $this->property('service');

        return Subservice::where('slug',$slug)->first();

    }

}