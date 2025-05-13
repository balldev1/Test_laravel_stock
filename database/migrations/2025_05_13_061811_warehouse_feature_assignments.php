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
    Schema::create('warehouse_feature_assignments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('warehouse_id')->constrained('warehouses');
        $table->foreignId('feature_id')->constrained('warehouse_features');
        $table->string('value')->nullable(); 
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouse_feature_assignments');
    }
};
