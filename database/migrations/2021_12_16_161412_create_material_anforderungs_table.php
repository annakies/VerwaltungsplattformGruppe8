<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialAnforderungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_anforderungs', function (Blueprint $table) {
            $table->increments('materialanforderung_nr');
            $table->integer('menge')->unsigned();
            $table->date('bestelldatum');
            $table->enum('lieferstatus', ['geplant', 'bestellt', 'versendet', 'zugestellt'])->default('geplant');
            $table->date('zustelldatum')->nullable();
            $table->unsignedInteger('material_nr');
            $table->unsignedInteger('mitarbeiter_nr');
            $table->unsignedInteger('auftrags_nr');
            $table->unsignedInteger('aufragspositions_nr');
            // $table->foreign('material_nr')->references('material_nr')->on('materials');
            // $table->foreign('mitarbeiter_nr')->references('personen_nr')->on('rolles');
            // $table->foreign('auftrags_nr')->references('auftrags_nr')->on('auftragspositions');
            // $table->foreign('aufragspositions_nr')->references('auftragspositions_nr')->on('auftragspositions');
            $table->timestamps();
        });
        Schema::table('material_anforderungs', function (Blueprint $table) {

            $table->foreign('material_nr')->references('material_nr')->on('materials');
            $table->foreign('mitarbeiter_nr')->references('personen_nr')->on('users');
            $table->foreign('auftrags_nr')->references('auftrags_nr')->on('auftrags');
            $table->foreign('aufragspositions_nr')->references('auftragspositions_nr')->on('auftragspositions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material__anforderungs');
    }
}
