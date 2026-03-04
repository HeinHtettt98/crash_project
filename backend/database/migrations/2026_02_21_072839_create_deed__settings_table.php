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
        Schema::create('deed__settings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('deed_type_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->text('copy_fee')->nullable();
            $table->text('register_fee')->nullable();
            $table->text('stamp_fee')->nullable();
            $table->text('maintenance_fee')->nullable();
            $table->text('commission_letter_fee')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deed__settings');
    }
};
