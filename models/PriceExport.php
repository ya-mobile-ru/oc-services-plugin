<?php

namespace Yamobile\Services\Models;

use Backend\Models\ExportModel;

class PriceExport extends ExportModel
{
    public function exportData(array $columns, $sessionKey = null): Price
    {

        $price = Price::all();
        $price->each(function($price) use ($columns) {
            $price->addVisible($columns);
        });

        return $price->toArray();
    }
}