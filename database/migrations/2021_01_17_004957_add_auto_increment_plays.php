<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddAutoIncrementPlays extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::update("ALTER TABLE plays MODIFY submission_id  INTEGER NOT NULL AUTO_INCREMENT;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        DB::update("alter table plays drop primary key;");
        DB::update("ALTER TABLE plays DROP COLUMN submission_id;");
        DB::update("alter table plays  add column submisison_id int primary key;");
    }
}
