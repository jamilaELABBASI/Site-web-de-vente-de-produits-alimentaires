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
        Schema::create('userApp',function(Blueprint $table){
            $table->id();
            $table->String('nom',15);
            $table->string('prenom',15);
            $table->string('etat',10);
            $table->string('adresse',30);
            $table->string('tel',15);
            $table->string('password');
            $table->string('cpassword');
            $table->date('date');
            $table->string('url');
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
        Schema::dropIfExists('userApp');
        //
    }
};
