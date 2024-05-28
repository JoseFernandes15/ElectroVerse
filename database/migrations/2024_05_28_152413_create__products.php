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

        Schema::create('product_brand', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Cria a tabela product_type
        Schema::create('product_type', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Cria a tabela product com uma chave estrangeira
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->string('description');
            $table->string('origin')->nullable();
            $table->unsignedBigInteger('type');
            $table->unsignedBigInteger('brand');
            $table->string('color');
            $table->float('weight');
            $table->integer('quantity');
            $table->string('image');
            $table->float('rating')->nullable();
            $table->text('additional_info')->nullable();
            $table->timestamps();

            // Define a chave estrangeira
            $table->foreign('type')->references('id')->on('product_type')->onDelete('cascade');
            $table->foreign('brand')->references('id')->on('product_brand')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
        Schema::dropIfExists('product_type');
        Schema::dropIfExists('product_brand');
    }
};
