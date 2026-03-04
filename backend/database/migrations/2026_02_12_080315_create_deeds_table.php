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
        Schema::create('deeds', function (Blueprint $table) {
            $table->id();
            $table->char('deed_status_id')->nullable();
            $table->bigInteger('deed_type_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();

            $table->text('contract_no')->nullable();
            $table->string('register_year')->nullable();
            $table->text('book_no', 36)->nullable();
            $table->text('volume')->nullable();

            $table->date('register_date')->nullable();
            $table->date('final_contract_date')->nullable();
            $table->date('contract_submit_date')->nullable();
            $table->date('contract_date')->nullable();

            $table->text('stamp_fee')->nullable();
            $table->text('register_fee')->nullable();
            $table->text('deposit_stubs')->nullable();
            $table->text('translation_fee')->nullable();
            $table->text('maintenance_fee')->nullable();
            $table->date('maintenance_date')->nullable();
            $table->text('transportation_fee')->nullable();
            $table->text('commission_letter_fee')->nullable();
            $table->text('copy_fee')->nullable();
            $table->text('cost')->nullable();

            $table->foreignId('office_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();

            $table->text('remark')->nullable();
            $table->text('fines')->nullable();
            $table->text('modify_remarks')->nullable();
            $table->string('deed_no')->nullable();

            $table->char('approved_user_id', 36)->nullable();
            $table->timestamp('approved_at')->nullable();

            $table->text('contractor1_name')->nullable();
            $table->text('contractor1_nric_no')->nullable();
            $table->text('no_of_contractors1')->nullable();
            $table->text('contractor1_father_name')->nullable();
            $table->text('contractor1_address')->nullable();
            $table->text('other_agents')->nullable();

            $table->text('contractor2_name')->nullable();
            $table->text('contractor2_nric_no')->nullable();
            $table->text('no_of_contractors2')->nullable();
            $table->text('contractor2_father_name')->nullable();
            $table->text('contractor2_address')->nullable();
            $table->text('others_received')->nullable();

            $table->foreignId('state_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('district_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('township_id')->nullable()->constrained()->cascadeOnDelete();

            $table->text('town')->nullable();
            $table->text('quarter')->nullable();

            $table->text('holding_no')->nullable();
            $table->text('land')->nullable();
            $table->text('land_detail')->nullable();
            $table->text('land_no')->nullable();
            $table->text('land_type')->nullable();
            $table->text('area')->nullable();
            $table->text('unit')->nullable();
            $table->text('other_property')->nullable();

            $table->foreignId('state_id_2')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('district_id_2')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('township_id_2')->nullable()->constrained()->cascadeOnDelete();

            $table->text('town_2')->nullable();
            $table->text('quarter_2')->nullable();

            $table->text('holding_no_2')->nullable();
            $table->text('land_2')->nullable();
            $table->text('land_detail_2')->nullable();
            $table->text('land_no_2')->nullable();
            $table->text('land_type_2')->nullable();
            $table->text('area_2')->nullable();
            $table->text('unit_2')->nullable();
            $table->text('other_property_2')->nullable();

            $table->char('type_of_original_form', 36)->nullable();
            $table->text('original_form_id')->nullable();
            $table->longText('original_data')->nullable();
            $table->text('amendment')->nullable();

            $table->text('type_of_other_deed')->nullable();
            $table->text('file_path')->nullable();
            $table->bigInteger('created_by')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->char('update_by', 36)->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deeds');
    }
};
