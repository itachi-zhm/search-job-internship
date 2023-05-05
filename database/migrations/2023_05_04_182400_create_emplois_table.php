<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplois', function (Blueprint $table) {
            $table->increments('id_emploi');
            $table->float('salaire');
            $table->string('lieu_emploi', 50);
            $table->string('type_contrat', 200);
            $table->integer('id_offre')->unsigned();
            $table->timestamps();

            $table->foreign('id_offre')->references('id_offre')->on('offres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emplois');
    }
};
