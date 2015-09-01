<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestLoggerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rest-logger', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip_address');
            $table->string('method');
            $table->string('root');
            $table->string('url');
            $table->string('full_url');
            $table->string('path');
            $table->boolean('is_ajax');
            $table->boolean('is_secure');
            $table->boolean('has_file');
            $table->boolean('has_json');
            $table->boolean('has_cookie');
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
        Schema::drop('rest-logger');
    }
}






