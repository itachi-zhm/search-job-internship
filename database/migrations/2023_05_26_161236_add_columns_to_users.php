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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('image',300)->change();
            $table->string('ville')->after('password');
            $table->enum('niveau_scolaire', ['bac', 'bac+1', 'bac+2', 'bac+3', 'bac+4', 'bac+5', 'doctorant'])->after('num_tel');
            $table->string('cv',300)->after('niveau_scolaire');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn(['ville', 'niveau_scolaire','cv']);
        });
    }
};
