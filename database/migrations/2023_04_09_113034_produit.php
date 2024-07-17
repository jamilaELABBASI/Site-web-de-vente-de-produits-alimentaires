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
        schema::create('produit',function(Blueprint $table){

            $table->increments('id');
            $table->string('designation');
            $table->Text('description');
            $table->Text('prix');
            $table->string('url')->nullable();

            //$table->foreign('categorie_id')->references('id')->on('categprie');
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
        schema::dropIfExists('produit');
        //
    }
};
