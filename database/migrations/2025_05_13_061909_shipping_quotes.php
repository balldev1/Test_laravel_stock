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
    Schema::create('shipping_quotes', function (Blueprint $table) {
        $table->id();
        $table->foreignId('sales_order_id')->constrained('sales_orders');
        $table->foreignId('provider_id')->constrained('shipping_providers');
        $table->decimal('calculated_cost', 10, 2);
        $table->date('delivery_eta');
        $table->boolean('is_selected')->default(false);
        $table->json('calculation_details')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_quotes');
    }
};
