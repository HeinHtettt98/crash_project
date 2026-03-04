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
        Schema::create('deed__comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('deed_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->bigInteger('from_office_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->bigInteger('from_user_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->bigInteger('to_user_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->json('message')->nullable();
            $table->bigInteger('to_office_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deed__comments');
    }
};
