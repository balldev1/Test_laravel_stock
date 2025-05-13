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
    Schema::create('zone_feature_assignments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('zone_id')->constrained('zones');
        $table->foreignId('feature_id')->constrained('zone_features');
        $table->string('value')->nullable(); // Optional, e.g. 2-8°C
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zone_feature_assignments');
    }
};
