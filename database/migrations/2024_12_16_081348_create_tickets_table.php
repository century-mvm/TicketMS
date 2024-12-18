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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_code')->unique();
            $table->string('buyer_name');
            $table->string('buyer_email');
            $table->integer('num_ticket');
            $table->decimal('price',8,2);
            $table->enum('type',['vip','regular','other']);
            $table->boolean('is_avalable');
            $table->boolean('is_checked_in')->default(false);
            $table->foreignId('even_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
