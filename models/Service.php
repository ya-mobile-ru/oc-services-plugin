<?php


namespace Yamobile\Services\Models;

use Model;

/**
 * Model
 */
class Service extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'yamobile_services_services';


    public $belongsTo = [
        'category' => \Yamobile\Services\Models\Category::class,
    ];

}
