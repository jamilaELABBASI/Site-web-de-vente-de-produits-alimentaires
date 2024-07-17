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

        schema::create('commande',function(Blueprint $table){
            $table->increments('id');
            $table->String('etat');
            $table->Date('date');
            $table->double('prixtotal'); //?????????????????
            //$table->foreign('client_id')->references('id')->on('client');
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
        schema::dropIfExistes('commande');
        //
    }
};
