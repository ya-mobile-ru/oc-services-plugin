<?php

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\Subservice;



class PreviewSubservices extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.services::lang.components.preview_subservices.name',
            'description' => 'yamobile.services::lang.components.preview_subservices.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'items' => [
                'title'       => 'yamobile.services::lang.components.preview_subservices.properties.items.title',
                'description' => 'yamobile.services::lang.components.preview_subservices.properties.items.description',
                'default'     => '6',
            ],
        ];
    }

    /**
     *  Выводит колекцию из базы данных
     */
        public function getAllSubservices()
    {

        $items = $this->property('items');

        // СПРОСИТЬ У ЖЕНИ КАК ПОЛУЧИТЬ ЗНАЧЕНИЕ
        if($items == 'all'){
            return Subservice::all();
        }else{
            return Subservice::paginate($items);
        }
    }

}