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
        Schema::create('acte_deces', function (Blueprint $table) {
            $table->id();
            $table->string("extrait");
            $table->string("piece_deces");
            $table->string("certificat_deces")->nullable();
            $table->string("piece_parent");
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
        Schema::dropIfExists('date_deces');
    }
};
