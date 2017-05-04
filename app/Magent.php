<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magent extends Model
{
    protected $table = 'm_agent';
    protected $fillable = ['agent_id', 'agent_company_name', 'agent_sales_man_name', 'agent_manager_name', 'agent_sales_man_phone_number', 'agent_manager_name_phone_number', 'agent_commission', 'agent_status', 'record_status', 'create_date', 'created_by', 'modified_date', 'modified_by'];
}
