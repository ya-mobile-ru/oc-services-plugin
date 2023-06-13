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
                    if($price){
                        $price->update(array_except($data, ['id','categories']));
                        $this->logUpdated();
                    }else{
                        $price = Price::create($data);
                        $this->logCreated();
                    }
                } else {
                    $price = Price::create($data);
                    $this->logCreated();
                }


                $category_data = (!empty(array_get($data, 'categories'))) ? array_get($data, 'categories') : false;


                if($category_data){

                    $price->categories()->sync(self::separateRelationString($category_data));

                }
            }
            catch (\Exception $ex) {
                $this->logError($row, $ex);
            }

        }
    }


    static private function separateRelationString($str_category): array
    {

        $separate = ';';

        $categoryModel =  null;

        $id_category = array();

        foreach (explode($separate,$str_category) as $category_name){

            if(empty($category_name)) continue;

            $categoryModel = Category::where('name', $category_name)->first();

            if(!$categoryModel){
                $categoryModel = Category::create(['name' => $category_name,'slug' => str_slug($category_name, '-')]);
            }

            $id_category[] = $categoryModel->id;

        }

        return $id_category;

    }

}
