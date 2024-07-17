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

        schema::create('livreur',function(Blueprint $table){
        $table->id();
            $table->String('nom');
            $table->string('prenom');
            $table->string('etat');
            $table->string('adresse');
            $table->string('tel');
            $table->string('password');
            $table->string('cpassword');
            //$table->date('date');
            $table->string('url')->nullable();
            $table->date('datenaissance');
            $table->string('matricule');
            $table->timestamps();

        //
    });}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livreur');
        //
    }
};
