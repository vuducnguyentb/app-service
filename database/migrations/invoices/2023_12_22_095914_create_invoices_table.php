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
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code', 255)->comment('Mã hóa đơn');
            $table->string('ordered_by', 255)->comment('Người đặt ');
            $table->string('phone_booker', 255)->comment('Số điện thoại người đặt');
            $table->enum('status', ['order','wait', 'deliver','cancel','success'])
                ->default('wait')
                ->comment('Trạng thái:đặt hàng,chờ,đang giao,hủy,hoàn thành');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
