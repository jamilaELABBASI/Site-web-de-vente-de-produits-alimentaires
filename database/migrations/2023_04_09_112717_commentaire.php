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
        schema::create('commentaire',function(Blueprint $table){
            $table->increments('id');
            $table->Text('contenue');
            $table->Date('date');
            $table->Boolean('order'); //?????????????????
            //$table->foreign('livraison_id')->references('id')->on('livraison');
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
        schema::dropIfExists('commentaire');
        //
    }
};
