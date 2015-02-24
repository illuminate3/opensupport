<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('clients', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('street');
            $table->string('city');
            $table->string('zip_code');
            $table->string('country');
            $table->timestamps();
        });

        Schema::table('tickets', function($table) {
            $table->integer('client_id')->unsigned()->nullable();
            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('tickets', function($table) {
            $table->dropForeign('tickets_client_id_foreign');
            $table->dropColumn('client_id');
        });

        Schema::drop('clients');
    }

}
