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
        //
        Schema::create('candidatures', function (Blueprint $table) {
            $table->increments('id_candidature');
            $table->date('date_candidature');
            $table->boolean('etat_candidature')->default(false);
            $table->date('date_validation')->nullable();
            $table->unsignedInteger('id_offre');
            $table->unsignedInteger('id_user');
            $table->timestamps();

            $table->foreign('id_offre')->references('id_offre')->on('offres')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('candidatures');
    }
};
