<?php

namespace Yamobile\Services\Models;

use Model;

class Category extends Model
{

    public $table = 'yamobile_services_categories';

    public $hasMany = [
        'services' => \Yamobile\Services\Models\Service::class
    ];

}