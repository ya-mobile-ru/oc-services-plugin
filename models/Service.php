<?php

namespace Yamobile\Services\Models;

use Model;

class Service extends Model
{

    public $table = 'yamobile_services_services';

    public $hasMany = [
        'subservices' => \Yamobile\Services\Models\Subservice::class
    ];

}