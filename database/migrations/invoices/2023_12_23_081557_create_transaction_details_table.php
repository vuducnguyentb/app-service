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
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('invoice_id')->unsigned()->nullable()
                ->comment('id hóa đơn');
            $table->integer('quantity')->nullable()
                ->comment('số lượng.');
            $table->integer('price')->nullable()
                ->comment('Giá sản phẩm hoặc combo');
            $table->integer('total_amount')->nullable()
                ->comment('Tổng tiền');
            $table->morphs('auditable');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('invoice_id', 'fk_transaction_detail_invoice')
                ->references('id')->on('invoices');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_details');
    }
};
