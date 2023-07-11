<?php

declare(strict_types = 1);

namespace Yamobile\Services\Models;

use Model;
use Yamobile\Services\Models\Category;

class Service extends Model
{

    use \October\Rain\Database\Traits\Sortable;

    public string $table = 'yamobile_services_services';


    public array $belongsTo = [
        'category' => Category::class,
    ];
}
