<?php

use App\Models\UserApp;
use Illuminate\Database\Eloquent\Model;
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

        Schema::create('admin',function(Blueprint $table){
            $table->id();
            $table->String('nom');
            $table->string('prenom');
            $table->string('etat');
            $table->string('adresse');
            $table->string('tel');
            $table->String('email');
            $table->string('password');
            $table->string('cpassword');
            $table->date('datenaissance');
            //$table->string('url')->nullable();
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
        Schema::dropIfExists('admin');
    }
};
