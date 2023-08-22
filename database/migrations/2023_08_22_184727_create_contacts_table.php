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
        Schema::create('contacts', function(Blueprint $table){
           $table->id();
           $table->string('name', 100);
           $table->string('phone',30);
           $table->date('birthDate');
           $table->string('email',100)->nullable(true);
           $table->string('observations',250)->nullable(true);
           $table->string('image',200)->nullable(true);
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
        Schema::dropIfExists('contact');
    }
};
