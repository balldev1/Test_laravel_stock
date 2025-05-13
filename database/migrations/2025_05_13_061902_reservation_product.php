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
    Schema::create('reservation_product', function (Blueprint $table) {
        $table->id();
        $table->foreignId('product_id')->constrained('products');
        $table->foreignId('warehouse_id')->nullable()->constrained('warehouses');
        $table->foreignId('location_id')->nullable()->constrained('locations');
        $table->foreignId('order_id')->nullable()->constrained('sales_orders');
        $table->integer('reserved_quantity');
        $table->enum('priority_level', ['low', 'normal', 'high', 'critical']);
        $table->date('reserved_until');
        $table->enum('status', ['active', 'expired', 'released', 'fulfilled']);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_product');
    }
};
