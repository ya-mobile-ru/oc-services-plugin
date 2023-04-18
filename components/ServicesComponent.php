<?php

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\Service;



class ServicesComponent extends ComponentBase
{

    public $services;

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.services::lang.components.services.name',
            'description' => 'yamobile.services::lang.components.services.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'items' => [
                'title'       => 'yamobile.services::lang.components.services.properties.items.title',
                'description' => 'yamobile.services::lang.components.services.properties.items.description',
                'default'     => '6',
            ],
        ];
    }

    /**
     *  Выводит колекцию из базы данных
     */
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