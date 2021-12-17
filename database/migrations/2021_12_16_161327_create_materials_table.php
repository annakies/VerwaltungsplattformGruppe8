<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('material_nr');
            $table->string('bezeichnung');
            $table->double('euro_pro_me', 7, 2);
            $table->enum('mengeneinheit', ['cm2', 'm2', 'g', 'kg', 't', 'ml', 'l', 'stk', 'cm', 'm']);
            $table->unsignedInteger('verfuegbare_menge');
            $table->unsignedInteger('erwartete_lieferdauer');
            $table->unsignedInteger('lieferant_nr');
            // $table->foreign('lieferant_nr')->references('personen_nr')->on('rolles');
            $table->timestamps();
        });
        Schema::table('materials', function (Blueprint $table) {

            $table->foreign('lieferant_nr')->references('personen_nr')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
