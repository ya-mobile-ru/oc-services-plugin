<?php

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\Category;



class CategoriesComponent extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.services::lang.components.categories.name',
            'description' => 'yamobile.services::lang.components.categories.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'items' => [
                'title'       => 'yamobile.services::lang.components.categories.properties.items.title',
                'description' => 'yamobile.services::lang.components.categories.properties.items.description',
                'default'     => '6',
            ],
        ];
    }

    public function getAllCategories()
    {

        $items = $this->property('items');

        // СПРОСИТЬ У ЖЕНИ КАК ПОЛУЧИТЬ ЗНАЧЕНИЕ
            if($items == 'all'){
                return Category::all();
            }else{
                return Category::paginate($items);
            }
    }

}