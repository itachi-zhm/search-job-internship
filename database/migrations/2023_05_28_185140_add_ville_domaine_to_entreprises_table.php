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
        Schema::table('entreprises', function (Blueprint $table) {
            //
            $table->string('ville',100)->after('description');
            $table->enum('domaine', ['technologie', 'sante', 'industrie', 'agriculture', 'restauration'])->after('adresse');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entreprises', function (Blueprint $table) {
            //
            $table->dropColumn('ville');
            $table->dropColumn('domaine');
        });
    }
};
