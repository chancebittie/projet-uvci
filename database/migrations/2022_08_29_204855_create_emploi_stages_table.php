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
        Schema::create('emploi_stages', function (Blueprint $table) {
            $table->id();
            $table->string('titre_annonce');
            $table->string('description');
            $table->string('nom_entreprise');
            $table->foreignId('user_id')->constrained();
            $table->integer('nombre_poste');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emploie_stages');
    }
};
