<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('sales_order_items', function (Blueprint $table) {
        $table->id();
        $table->foreignId('sales_order_id')->constrained('sales_orders');
        $table->foreignId('product_id')->constrained('products');
        $table->integer('ordered_quantity');
        $table->integer('allocated_quantity');
        $table->decimal('unit_price', 10, 2);
        $table->date('reserved_until')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_order_items');
    }
};
