<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemPreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('system_preferenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('settings_name');
            $table->string('settings_value');
            $table->string('Settings Note For HINTS');
            $table->timestamps();
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('system_preferenses');
    }
}
