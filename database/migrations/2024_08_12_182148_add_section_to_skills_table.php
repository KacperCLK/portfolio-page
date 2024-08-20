<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSectionToSkillsTable extends Migration
{
    public function up()
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->string('section')->nullable(); 
        });
    }

    public function down()
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->dropColumn('section'); 
        });
    }
}
