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
        Schema::create('stages', function (Blueprint $table) {
            $table->id('id_stage');
            $table->float('remuneration_stage');
            $table->string('lieu_stage', 50);
            $table->float('duree_stage');
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
        Schema::dropIfExists('stages');
    }
};
