<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('lieu');
            $table->date('date');
            $table->string('total');
            $table->string('modePayement');
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_restaurant');
            $table->unsignedBigInteger('id_livreur');

            $table->timestamps();
            $table->foreign('id_client')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade');

            $table->foreign('id_restaurant')
                ->references('id')
                ->on('restaurants')
                ->onDelete('cascade');

            $table->foreign('id_livreur')
                ->references('id')
                ->on('livreurs')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
