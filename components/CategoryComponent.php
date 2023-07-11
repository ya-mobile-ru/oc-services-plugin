<?php

declare(strict_types = 1);

namespace Yamobile\Services\Components;

use Response;
use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\Category;

class CategoryComponent extends ComponentBase
{

    public Category $category;
    public array $breadcrumbs;

    public function componentDetails(): array
    {
        return [
            'name' => 'yamobile.services::lang.components.category.name',
            'description' => 'yamobile.services::lang.components.category.description',
        ];
    }


    public function defineProperties(): array
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


    public function onRun(): string
    {

        $this->category = $this->loadCategory();

        if($this->isCategory()){
            $this->setStatusCode(404);
            return $this->controller->run('404');
        }

        $this->breadcrumbs = $this->generateBreadcrumbs();
    }


    private function loadCategory(): Category
    {
        $slug = $this->property('slug');

        return Category::where('slug',$slug)
            ->where('is_enabled', true)
            ->first();
    }

    private function generateBreadcrumbs(): array
    {

        $category = $this->loadCategory();

        return [
            'name' => $category->name,
            'link' => false
        ];

    }

    private function isCategory(): bool
    {
        if (!$this->category){
            return false;
        }

        return true;
    }
}
