<?php

namespace Yamobile\Services\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class RenameYamobileServicesSubservices extends Migration
{
    public function up()
    {
        Schema::table('yamobile_services_subservice', function ($table) {
            $table->renameColumn('category_id','service_id');
        });
    }

    public function down()
    {
        Schema::table('yamobile_services_subservice', function ($table) {
            $table->renameColumn('service_id','category_id');
        });
    }
}