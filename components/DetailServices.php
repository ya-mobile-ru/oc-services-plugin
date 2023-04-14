<?php

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\Service;



class DetailServices extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.services::lang.components.detail_services.name',
            'description' => 'yamobile.services::lang.components.detail_services.description',
        ];
    }


    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'yamobile.services::lang.components.detail_services.properties.slug.title',
                'description' => 'yamobile.services::lang.components.detail_services.properties.slug.description',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
        ];
    }

    public function getDetailServices()
    {

        $slug = $this->property('slug');

        $detail_services = Service::where('slug',$slug)->first();

        return $detail_services;
    }



}