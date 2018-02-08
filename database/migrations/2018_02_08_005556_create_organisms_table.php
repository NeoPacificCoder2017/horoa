<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganismsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisms', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nom');
            $table->string('telephone');
            $table->string('mail');
            $table->string('boite_postale');
            $table->integer('n_tahiti');
            $table->string('password');
            $table->integer('credibilite');

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
        Schema::dropIfExists('organisms');
    }
}
