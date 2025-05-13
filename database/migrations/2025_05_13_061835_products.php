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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->enum('type', ['normal', 'temperature', 'expiration', 'dangerous']);
        $table->string('sku');
        $table->string('barcode');
        $table->string('source');
        $table->date('production_date');
        $table->date('expiration_date')->nullable();
        $table->foreignId('supplier_id')->nullable()->constrained('suppliers');
        $table->decimal('price', 10, 2)->default(0);
        $table->timestamps();
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
