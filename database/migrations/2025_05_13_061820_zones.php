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
    Schema::create('zones', function (Blueprint $table) {
        $table->id();
        $table->foreignId('warehouse_id')->constrained('warehouses');
        $table->string('name');
        $table->enum('type', ['receiving', 'storing', 'shipping', 'damaged']);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zones');
    }
};
