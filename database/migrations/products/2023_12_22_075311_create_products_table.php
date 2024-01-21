<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code', 255)->comment('Mã sản phẩm');
            $table->string('name', 255)->comment('Tên ');
            $table->string('slug')->unique();
            $table->bigInteger('product_category_id')->unsigned()->nullable()
            ->comment('id nhóm sản phẩm');
            $table->longText('body')->nullable()->comment('nội dung');
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->enum('status', ['active', 'in_active'])
                ->default('active')
                ->comment('Trạng thái:hoạt động và ngừng hoạt động');
            $table->string('image')->nullable()
                ->comment('ảnh sản phẩm');
            $table->integer('quantity')->default(0)
            ->comment('số lượng hiện có.');
            $table->integer('views')->default(0)
                ->nullable()
                ->comment('số lượt xem.');
            $table->enum('freeship', ['active', 'in_active'])
                ->default('in_active')
                ->comment('phí ship');
            $table->enum('is_hot', ['active', 'in_active'])
                ->default('active')
                ->comment('Có phải sản phẩm hot tuần');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('product_category_id', 'fk_product_product_category')
                ->references('id')->on('product_categories');
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
