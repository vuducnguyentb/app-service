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
        Schema::create('combo_products', function (Blueprint $table) {
            $table->bigInteger('combo_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->integer('quantity')->default(1)
                ->comment('số lượng sản phẩm cho combo.');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->primary(['combo_id', 'product_id']);
            $table->foreign('combo_id', 'fk_combo_product_combo')->references('id')->on('combos');
            $table->foreign('product_id', 'fk_combo_product_product')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('combo_products');
    }
};
