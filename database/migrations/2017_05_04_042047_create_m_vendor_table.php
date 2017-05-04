<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_vendor', function (Blueprint $table) {
            $table->increments('vendor_id');
            $table->string('vendor_id_display', 10)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('phone_number', 13)->nullable();
            $table->string('whatsapp_number', 13)->nullable();
            $table->string('contact_name', 100)->nullable();
            $table->string('bill_name', 100)->nullable();
            $table->string('cash_discount_type', 30)->nullable();
            $table->string('cd_value', 30)->nullable()->nullable();
            $table->string('items_available', 300)->nullable();
            $table->string('preferred_item', 300)->nullable();
            $table->string('credit_period', 10)->nullable();
            $table->string('over_due_penalty', 5)->nullable();
            $table->string('priority', 10)->nullable();
            $table->string('bank_name_1', 30)->nullable();
            $table->string('bank_account_name_1', 100)->nullable();
            $table->string('bank_account_number_1', 30)->nullable();
            $table->string('ifsc_code_1', 30)->nullable();
            $table->string('bank_address_1', 100)->nullable();
            $table->string('bank_name_2', 30)->nullable();
            $table->string('bank_account_name_2', 100)->nullable();
            $table->string('bank_account_number_2', 30)->nullable();
            $table->string('ifsc_code_2', 30)->nullable();
            $table->string('bank_address_2', 100)->nullable();
            $table->datetime('create_date')->nullable();
            $table->string('created_by', 100)->nullable();
            $table->datetime('modified_date')->nullable();
            $table->string('modified', 100)->nullable();
            $table->date('vendor_since_date')->nullable();
            $table->string('vendor_status', 50)->nullable();
            $table->string('record_status', 50)->nullable();
            $table->string('Vendor_relationship_type', 50)->nullable();
            $table->string('vendor_relationship_details', 100)->nullable();
            $table->timestamp();
        }); //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_vendor'); //
    }
}
