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
        // Schema::create('products', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('model');
        //     $table->decimal('weight');
        //     $table->decimal('price');
        //     $table->decimal('discount')->min(0)->max(100)->default(0);
        //     $table->text('description');
        //     $table->integer('final_quantity');
        //     $table->timestamps();
        // });
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // $table->increments('id');
            $table->decimal('weight');
            $table->decimal('price');
            $table->decimal('discount')->min(0)->max(100)->default(0);
            $table->integer('final_quantity');
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
