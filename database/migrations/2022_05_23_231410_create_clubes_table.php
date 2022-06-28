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
        Schema::create('clubes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->date('fundacao');
        });
        Schema::create('cidades', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->timestamps();
        });

        Schema::create('times', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->unsignedBigInteger('idcidade');
            $table->timestamps();
            $table->foreign('idcidade')->references('id')->on('cidades');
        });
        Schema::create('torcedors', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->unsignedBigInteger('idcidade');
            $table->unsignedBigInteger('idTime');
            $table->timestamps();
            $table->foreign('idcidade')->references('id')->on('cidades');
            $table->foreign('idTime')->references('id')->on('times');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubes');
    }
};
