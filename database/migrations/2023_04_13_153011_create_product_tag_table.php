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
        Schema::create('product_tag', function (Blueprint $table) {
            $table->id();
            
              //? fk prodotti
              $table->unsignedBigInteger('product_id')->nullable();
              $table->foreign('product_id')->references('id')->on('products')->onDelete('set null');
              //? fk tag
              $table->unsignedBigInteger('tag_id');
              $table->foreign('tag_id')->references('id')->on('tags');

              
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_tag');
    }
};
