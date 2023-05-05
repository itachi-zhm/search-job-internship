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
        Schema::create('offres', function (Blueprint $table) {
            $table->increments('id_offre');
            $table->string('titre_offre', 150);
            $table->string('description_offre', 800);
            $table->date('date_publication');
            $table->date('date_limite');
            $table->enum('type_offre', ['emploi', 'stage']);
            $table->integer('id_entreprise')->unsigned();
            $table->timestamps();


            $table->foreign('id_entreprise')->references('id')->on('entreprises')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres');
    }
};
