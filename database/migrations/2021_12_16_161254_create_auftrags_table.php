<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuftragsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auftrags', function (Blueprint $table) {
            $table->increments('auftrags_nr');
            $table->date('eingangsdatum');
            $table->date('abschlussdatum')->nullable();
            $table->date('FAZ');
            $table->date('SEZ')->nullable();
            $table->enum('status', ['neu', 'antrag_in_bearbeitung', 'angenommen', 'abgelehnt', 'in_bearbeitung', 'abgeschlossen'])->default('neu');
            $table->unsignedInteger('kunden_nr');
            $table->unsignedInteger('adress_nr');
            // $table->foreign('kunden_nr')->references('personen_nr')->on('rolles');
            // $table->foreign('adress_nr')->references('adress_nr')->on('adresses');
            $table->timestamps();
        });
        Schema::table('auftrags', function (Blueprint $table) {
            $table->foreign('kunden_nr')->references('personen_nr')->on('users');
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
        Schema::dropIfExists('auftrags');
    }
}
