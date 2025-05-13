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
    Schema::create('customers', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('contact_name');
        $table->string('phone');
        $table->string('email');
        $table->text('billing_address');
        $table->text('shipping_address');
        $table->enum('customer_type', ['individual', 'company']);
        $table->string('tax_id')->nullable();
        $table->enum('priority_level', ['low', 'normal', 'high', 'vip']);
        $table->enum('default_shipping_urgency', ['normal', 'express', 'next_day']);
        $table->text('notes')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
