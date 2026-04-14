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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('car_id')->constrained()->cascadeOnDelete();

            $table->dateTime('start_at');
            $table->dateTime('end_at');

            $table->decimal('total_amount', 10, 2)->default(0);
            $table->string('status')->default('pending');

            $table->string('pickup_location')->nullable();
            $table->string('dropoff_location')->nullable();

            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index(['car_id', 'start_at', 'end_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
