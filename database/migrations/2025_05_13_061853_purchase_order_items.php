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
    Schema::create('purchase_order_items', function (Blueprint $table) {
        $table->id();
        $table->foreignId('purchase_order_id')->constrained('purchase_orders');
        $table->foreignId('product_id')->constrained('products');
        $table->integer('ordered_quantity');
        $table->integer('received_quantity');
        $table->decimal('unit_price', 10, 2);
        $table->date('expected_delivery_date');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_order_items');
    }
};
