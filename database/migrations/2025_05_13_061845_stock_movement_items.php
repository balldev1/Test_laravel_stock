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
    Schema::create('stock_movement_items', function (Blueprint $table) {
        $table->id();
        $table->foreignId('stock_movement_id')->constrained('stock_movements');
        $table->foreignId('product_id')->constrained('products');
        $table->foreignId('from_location_id')->nullable()->constrained('locations');
        $table->foreignId('to_location_id')->nullable()->constrained('locations');
        $table->integer('quantity');
        $table->string('unit');
        $table->string('batch_no')->nullable();
        $table->date('expiration_date')->nullable();
        $table->enum('picked_algorithm', ['fifo', 'fefo', 'shortest_distance', 'hybrid'])->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_movement_items');
    }
};
