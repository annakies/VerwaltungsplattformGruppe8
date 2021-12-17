<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuftragspositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auftragspositions', function (Blueprint $table) {
            $table->unsignedInteger('auftrags_nr');
            $table->increments('auftragspositions_nr');
            $table->text('individuelle_beschreibung');
            $table->datetime('FAZ');
            $table->datetime('FEZ');
            $table->datetime('SAZ');
            $table->datetime('SEZ');
            $table->double('puffer', 5, 2);
            $table->double('geplante_dauer', 5, 2);
            $table->enum('status', ['offen', 'in_bearbeitung', 'abgeschlossen'])->default('offen');
            $table->boolean('unterstützung_angefordert')->default(false);
            $table->string('verzögerungsgrund')->nullable();
            $table->unsignedInteger('leistungs_nr');
            // $table->foreign('leistungs_nr')->references('leistungs_nr')->on('leistungs');
            $table->timestamps();
        });
        Schema::table('auftragspositions', function (Blueprint $table) {
            $table->foreign('leistungs_nr')->references('leistungs_id')->on('leistungs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auftragspositions');
    }
}
