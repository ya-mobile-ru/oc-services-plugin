<?php

declare(strict_types = 1);

namespace Yamobile\Services\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Categories extends Controller
{
    public array $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController',
    ];

    public string $listConfig = 'config_list.yaml';

    public string $formConfig = 'config_form.yaml';

    public string $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Yamobile.Services', 'services-menu');
    }
}