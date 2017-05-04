<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMAgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_agent', function (Blueprint $table) {
            $table->increments('agent_id');
            $table->string('agent_company_name', 50)->nullable();
            $table->string('agent_sales_man_name', 100)->nullable();
            $table->string('agent_manager_name', 100)->nullable();
            $table->string('agent_sales_man_phone_number', 13)->nullable();
            $table->string('agent_manager_name_phone_number', 13)->nullable();
            $table->string('agent_commission', 10)->nullable();
            $table->string('agent_status', 50)->nullable();
            $table->string('record_status', 50)->nullable();
            $table->datetime('create_date')->nullable();
            $table->string('created_by', 100)->nullable();
            $table->datetime('modified_date')->nullable();
            $table->string('modified_by', 100)->nullable();
            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_agent', function (Blueprint $table) {
            Schema::dropIfExists('m_agent'); ////
        });
    }
}
