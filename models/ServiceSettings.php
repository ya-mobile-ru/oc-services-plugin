<?php

declare(strict_types = 1);

namespace Yamobile\Services\Models;

use October\Rain\Database\Model;

class ServiceSettings extends Model
{

    public array $implement = [
        \System\Behaviors\SettingsModel::class,
    ];

    public string $settingsCode = 'yamobile_services_service_settings';

    public string  $settingsFields = 'fields.yaml';
}
