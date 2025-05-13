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
    Schema::create('shipping_providers', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('contact_info');
        $table->decimal('base_rate', 10, 2);
        $table->decimal('rate_per_kg', 10, 2);
        $table->decimal('rate_per_volume', 10, 2);
        $table->decimal('express_surcharge', 10, 2);
        $table->text('area_coverage');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_providers');
    }
};
