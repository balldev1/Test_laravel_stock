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
    Schema::create('product_supplier_assignments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('product_id')->constrained('products');
        $table->foreignId('supplier_id')->constrained('suppliers');
        $table->boolean('preferred')->default(false);
        $table->decimal('price', 10, 2)->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_supplier_assignments');
    }
};
