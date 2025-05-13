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
    Schema::create('sales_orders', function (Blueprint $table) {
        $table->id();
        $table->foreignId('customer_id')->constrained('customers');
        $table->enum('channel', ['pos', 'online', 'phone']);
        $table->enum('priority_level', ['low', 'normal', 'high', 'vip']);
        $table->enum('status', ['pending', 'processing', 'shipped', 'delivered', 'cancelled']);
        $table->date('order_date');
        $table->text('shipping_address');
        $table->string('shipping_method');
        $table->foreignId('created_by')->nullable(); // User ID if available
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_orders');
    }
};
