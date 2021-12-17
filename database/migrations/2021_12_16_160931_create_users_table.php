<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('personen_nr');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('passwort');
            $table->double('gehalt/stundenlohn', 7, 2)->nullable();
            $table->enum('rolle', ['administrator', 'kunde', 'lieferant', 'verwaltung', 'schreiner', 'dachdecker', 'elektriker', 'flieserleger', 'maurer', 'maler', 'sanitär']);
            $table->enum('status', ['akzeptiert', 'nicht_akzeptiert'])->default('nicht_akzeptiert');
            $table->unsignedInteger('adress_nr');
            // $table->foreign('adress_nr')->references('adress_nr')->on('adresses');
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {

            $table->foreign('adress_nr')->references('adress_nr')->on('adresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
