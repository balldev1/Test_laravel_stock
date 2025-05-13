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
    Schema::create('stock_movements', function (Blueprint $table) {
        $table->id();
        $table->enum('movement_type', ['inbound', 'outbound', 'internal_transfer', 'adjustment']);
        $table->foreignId('source_warehouse_id')->nullable()->constrained('warehouses');
        $table->foreignId('destination_warehouse_id')->nullable()->constrained('warehouses');
        $table->text('note')->nullable();
        $table->enum('reference_type', ['purchase_order', 'sales_order', 'adjustment'])->nullable();
        $table->foreignId('reference_id')->nullable();
        $table->foreignId('created_by')->nullable(); // User ID if you have a user system
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_movements');
    }
};
