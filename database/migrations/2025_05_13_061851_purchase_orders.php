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
    Schema::create('purchase_orders', function (Blueprint $table) {
        $table->id();
        $table->foreignId('supplier_id')->constrained('suppliers');
        $table->date('order_date');
        $table->enum('status', ['draft', 'approved', 'shipped', 'partially_received', 'completed']);
        $table->text('notes')->nullable();
        $table->foreignId('created_by')->nullable(); // User ID if available
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_orders');
    }
};
