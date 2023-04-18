<?php

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\Category;



class CategoryComponent extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.services::lang.components.category.name',
            'description' => 'yamobile.services::lang.components.category.description',
        ];
    }


    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'yamobile.services::lang.components.category.properties.slug.title',
                'description' => 'yamobile.services::lang.components.category.properties.slug.description',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
        ];
    }


    public function onRun()
    {

        $slug = $this->property('slug');

        $category = Category::where('slug',$slug)
            ->where('is_enabled', true)
            ->first();

        return $category;
    }



}