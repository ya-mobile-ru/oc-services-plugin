<?php

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\Service;



class PreviewServices extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.services::lang.components.preview_services.name',
            'description' => 'yamobile.services::lang.components.preview_services.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'items' => [
                'title'       => 'yamobile.services::lang.components.preview_services.properties.items.title',
                'description' => 'yamobile.services::lang.components.preview_services.properties.items.description',
                'default'     => '6',
            ],
        ];
    }

    public function getAllServices()
    {

        $items = $this->property('items');

        // СПРОСИТЬ У ЖЕНИ КАК ПОЛУЧИТЬ ЗНАЧЕНИЕ
            if($items == 'all'){
                return Service::all();
            }else{
                return Service::paginate($items);
            }
    }

}