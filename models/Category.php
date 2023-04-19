<?php

namespace Yamobile\Services\Models;

use Model;
use Yamobile\Services\Models\Service;

class Category extends Model
{

    public $table = 'yamobile_services_categories';

    public $hasMany = [
        'services' => Service::class,
    ];

    public function activeServices()
    {
        return $this->services->where('is_enabled', true);
    }
}