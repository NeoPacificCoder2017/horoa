<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dons', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nom');
            $table->string('prenom');
            $table->string('mail');
            $table->string('password');
            $table->string('telephone');
            $table->text('addresse');
            $table->integer('don');
            $table->integer('mode_don_id');
            $table->date('date');
            $table->time('heure');
            $table->integer('validate');
            $table->integer('admin_id');
            $table->integer('somme_verse');
            $table->integer('operation_id');

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
        Schema::dropIfExists('dons');
    }
}
