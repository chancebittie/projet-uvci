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
        Schema::create('acte_mariages', function (Blueprint $table) {
            $table->id();
            $table->string('extrait_homme');
            $table->string('extrait_femme');
            $table->string('piece_homme');
            $table->string('piece_femme');
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
        Schema::dropIfExists('mariages');
    }
};
