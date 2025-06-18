<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        DB::table('cards')->update([
            'image' => DB::raw("CONCAT('img/', SUBSTRING_INDEX(image, '/', -1))")
        ]);
    }

    public function down()
    {
        DB::table('cards')->update([
            'image' => DB::raw("CONCAT('cards/', SUBSTRING_INDEX(image, '/', -1))")
        ]);
    }
}; 