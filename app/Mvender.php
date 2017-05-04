<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mvender extends Model
{
    protected $table = 'm_vendor';
    protected $fillable = ['vendor_id', 'vendor_id_display', 'city', 'state', 'address', 'phone_number', 'whatsapp_number', 'contact_name', 'bill_name', 'cash_discount_type', 'cd_value', 'items_available', 'preferred_item', 'credit_period', 'over_due_penalty', 'priority', 'bank_name_1', 'bank_account_name_1', 'bank_account_number_1', 'ifsc_code_1', 'bank_address_1', 'bank_name_2', 'bank_account_name_2', 'bank_account_number_2', 'ifsc_code_2', 'bank_address_2', 'create_date', 'created_by', 'modified_date', 'modified', 'vendor_since_date', 'vendor_status', 'record_status', 'Vendor_relationship_type', 'vendor_relationship_details'];
}
