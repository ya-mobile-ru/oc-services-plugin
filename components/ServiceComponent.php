<?php

declare(strict_types = 1);

namespace Yamobile\Services\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Services\Models\Service;
use Yamobile\Services\Models\Category;

class ServiceComponent extends ComponentBase
{

    public Service $service;
    public array $breadcrumbs;


    public function componentDetails(): array
    {
        return [
            'name' => 'yamobile.services::lang.components.service.name',
            'description' => 'yamobile.services::lang.components.service.description',
        ];
    }

    public function defineProperties(): array
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

        if($this->isServiceCategory()) {
            $this->setStatusCode(404);
            return $this->controller->run('404');
        }

        $this->breadcrumbs = $this->generateBreadcrumbs();
    }


    private function loadService(): Service
    {
        return Service::where('slug', $this->property('slug'))
            ->where('is_enabled', true)
            ->first();
    }

    private function generateBreadcrumbs(): array
    {

        $service = $this->loadService();

        $category = $service->category;

        return [
            [
                'name' => $category->name,
                'link' => $category->slug
            ],
            [
                'name' => $service->name,
                'link' => false
            ]
        ];

    }

    private function isServiceCategory(): bool
    {
        if (!$this->service){
            return false;
        }

        if($this->service->category['slug'] !== $this->property('category_slug')){
            return false;
        }

        return true;
    }

}