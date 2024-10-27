<?php

use Brick\Math\BigInteger;
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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('crypto_type'); //The type or symbol of cryptocurrency (e.g., BTC, ETH).
            $table->float('quantity'); //Decimal	Quantity of the cryptocurrency owned.
            $table->float('purchase_price'); //Decimal	Price per unit at the time of purchase.
            $table->date('purchase_date');//Date of the initial purchase.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};





