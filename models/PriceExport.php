<?php

namespace Yamobile\Services\Models;

use Backend\Models\ExportModel;
use Illuminate\Support\Facades\Log;

class PriceExport extends ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {

        $price = Price::all();
        $price->each(function($price) use ($columns) {
            $categories = $price->categories;
            $price->categories = $categories->implode('name', ';');
            $price->addVisible($columns);
            dd($columns);
        });
//        Log::error($price);

        return $price->toArray();
    }
}