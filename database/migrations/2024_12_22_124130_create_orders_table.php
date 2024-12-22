<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->integer('user_id');
            $table->integer('provider_id');
            $table->integer('service_id');
            $table->double('quantity');
            $table->string('page_link');
            $table->double('provider_main_price');
            $table->double('profit_percentage');
            $table->double('total_price');
            //////////////////////////////////////////////
            $table->foreignId('transaction_id');
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('payment_order_id')->nullable();
            $table->string('payment_order_number')->nullable();
            $table->tinyInteger('order_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
