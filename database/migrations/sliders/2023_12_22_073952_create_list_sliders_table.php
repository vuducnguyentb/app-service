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
        Schema::create('list_sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable()->default('Home slide');
            $table->string('key')->nullable()->default('home-slide');
            $table->enum('status', ['active', 'in_active'])
                ->default('active')
                ->comment('Trạng thái:hoạt động và ngừng hoạt động');
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
        Schema::dropIfExists('list_sliders');
    }
};
