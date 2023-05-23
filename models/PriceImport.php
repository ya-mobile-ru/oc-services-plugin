<?php

namespace  Yamobile\Services\Models;

use Backend\Models\ImportModel;

class PriceImport extends ImportModel
{

    public $table = 'yamobile_services_prices';


    protected $rules = [
        'name'    => 'required',
    ];

    public function importData($results, $sessionKey = null)
    {
        $firstRow = reset($results);

        foreach ($results as $row => $data) {

            try {



                if(array_key_exists('id', $data)){
                    $price = Price::find(array_get($data, 'id') );
                    $dataPrice = [];
                    foreach ($data as $attribute => $value) {
                        $dataPrice[] = [
                            $attribute => $value
                        ];
                    }
                    $price->update($dataPrice);
                } else {
                    $price = Price::create($data);
                }


                $category_data = (!empty(array_get($data, 'categories'))) ? array_get($data, 'categories') : false;

                $categoryModel =  null;

                if($category_data){
                    $categoryModel = Category::where('name', $category_data)->first();
                    if(!$categoryModel){
                        $categoryModel = Category::create(['name' => $category_data]);
                    }

                    $price->categories()->attach($categoryModel->id, ['price_id' => $price->id]);
                }


                if (array_key_exists('id', $data)) {
                    $this->logUpdated();
                } else {
                    $this->logCreated();
                }

            }
            catch (\Exception $ex) {
                $this->logError($row, $ex);
            }

        }
    }
}

