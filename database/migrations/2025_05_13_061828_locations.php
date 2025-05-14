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
    Schema::create('locations', function (Blueprint $table) {
        $table->id();
        $table->foreignId('zone_id')->constrained('zones');
        $table->string('name');
        $table->float('max_weight')->nullable();
        $table->float('max_volume')->nullable();
        $table->text('allowed_types')->nullable(); // Can store as comma-separated or JSON
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
