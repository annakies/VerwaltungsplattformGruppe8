<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeistungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leistungs', function (Blueprint $table) {
            $table->increments('leistungs_id');
            $table->string('bezeichnung');
            $table->enum('erforderliche_rolle', ['schreiner', 'dachdecker', 'elektriker', 'flieserleger', 'maurer', 'maler', 'sanitär']);
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
        Schema::dropIfExists('leistungs');
    }
}
