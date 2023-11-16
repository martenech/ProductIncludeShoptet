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
        Schema::create('products',function (Blueprint $table){
            $table->id();
            $table->integer('product_id');
            $table->string('name');
            $table->string('shortDescription')->nullable();
            $table->string('description')->nullable();
            $table->string('price')->nullable();
            $table->string('manufacturer')->nullable();
            $table->boolean('adult')->default(false);
            $table->boolean('itemType')->default('product');
            $table->string('url');
            $table->boolean('visible')->default('true');

            $table->integer('eshop_id');
            $table->integer('tenant_id');

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
