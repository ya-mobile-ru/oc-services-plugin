<?php


namespace Yamobile\Services\Models;

use Model;

/**
 * Model
 */
class Subservice extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'yamobile_services_subservice';


    public $belongsTo = [
        'service' => \Yamobile\Services\Models\Service::class,
    ];


    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
