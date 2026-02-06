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
            $table->foreignId('users_id')->constrained(
                table: 'users',
                indexName: 'users_id'
            )->onUpdate('cascade')->onDelete('cascade');
            $table->decimal('total', 10, 2);
            $table->boolean('pending')->default(false);
            $table->boolean('paid')->default(false);
            $table->boolean('shipped')->default(true);
            $table->boolean('delivered')->default(false);
            $table->boolean('cancelled')->default(false);
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
