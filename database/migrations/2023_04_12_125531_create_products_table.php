<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->float('price',  6, 2);
            $table->string('img');
            //? collonna per la foreign
            //? noi abbiamo solo detto alla migrazione di craere una colonna che contiene un intero positivo grande
            $table->unsignedBigInteger('user_id');//? c'e il collegamento?
            //? dobbiamo crearlo
            $table->foreign('user_id') //?assegna un vincolo a questa colonna 
                    ->references('id') //? questa colonna fa riferimento alla colonna id
                    ->on('users')->onDelete('set null'); //? nella tabella users
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
