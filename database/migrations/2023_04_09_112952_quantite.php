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
        schema::create('quantite',function (Blueprint $table){
            $table->increments('id');
            $table->integer('quantite');
           // $table->unsignedBigInteger('commande_id');
           // $table->foreign('commande_id')->references('id')->on('commande');
           // $table->unsignedBigInteger('produit_id');
            //$table->foreign('produit_id')->references('id')->on('produit');
            $table->timestamps();
        });

        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        schema::dropIfExists('quantite');
    }
};
