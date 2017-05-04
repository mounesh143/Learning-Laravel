@extends('layouts.app')
@extends('layouts.header')

@section('content')
<div class="container">
  <div class=""style="
    margin-top: 50px;">
      
    
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
      <strong>Success!</strong> {{ Session::get('success') }}
    </div>
    @endif
  <form class="form-horizontal" action="{{route('add.vendor')}}" method="POST">
  {{csrf_field()}}
    <div class="control-group">
      <label class="form-label col-sm-2" for="Vendor Id:">Vendor Id:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Vendor Id:" required>
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Vendor Id Display">Vendor Id Display:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="vendor_id_display" id="Vendor Id Display" max="10" required>
      </div>
    </div>
      
        <div class="control-group">
            <label class="form-label col-sm-2" for="title">Select Country:</label>
            <div class="col-sm-3">
            {!! Form::select('country', ['' => 'Select'] +$countries->toArray(),'',array('class'=>'form-control','id'=>'country'));!!}
            </div>
        </div>
            <div class="form-group">
                <label class="form-label col-sm-2" >Select State:</label>
                <div class="col-sm-3">
                <select name="state" id="state" class="form-control" required>
                </select>
                </div>
            </div>
         
            <div class="control-group">
                <label class="form-label col-sm-2">Select City:</label>
                <div class="col-sm-3">
                <select name="city" id="city" class="form-control" required>
                </select>
                </div>
            </div>
      
	<div class="form-group">
      <label class="form-label col-sm-2" for="Phone Number">Phone Number:</label>
      <div class="col-sm-3">
        <input type="number" class="form-control" id="Phone Number" placeholder="Enter Phone Number" name="phone_number" required>
      </div>
    </div>
 	<div class="control-group">
      <label class="form-label col-sm-2" for="Whatsapp Number">Whatsapp Number:</label>
      <div class="col-sm-3">
        <input type="number" class="form-control" id="Whatsapp Number" placeholder="Enter Whatsapp Number" name="whatsapp_number" required>
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Whatsapp Number">Contact Name:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Contact Name" placeholder="Enter Contact Name" name="contact_name" required>
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Bill Name">Bill Name:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Bill Name" placeholder="Enter Bill Name" name="bill_name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Cash Discount Type">Cash Discount Type:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Cash Discount Type" placeholder="Enter Cash Discount Type" name="cash_discount_type" required>
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="CD Value">CD Value:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="CD Value" placeholder="Enter CD Value" name="cd_value" required>
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Items Available">Items Available:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Items Available" placeholder="Enter Items Available" name="items_available" required>
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Preferred Item">Preferred Item:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Preferred Item" placeholder="Enter Preferred Item" name="preferred_item" required>
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Credit Period">Credit Period:</label>
      <div class="col-sm-3">
        <input type="number" class="form-control" id="Credit Period" placeholder="Enter Credit Period" name="credit_period" required>
      </div>
    </div>
		<div class="control-group">
      <label class="form-label col-sm-2" for="Over Due Penalty">Over Due Penalty:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Over Due Penalty" placeholder="Enter Over Due Penalty" name="over_due_penalty" max="5" required>
      </div>
    </div>
		<div class="form-group">
      <label class="form-label col-sm-2" for="Priority">Priority:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Priority" placeholder="Enter Priority" name="priority" required>
      </div>
    </div>
		<div class="control-group">
      <label class="form-label col-sm-2" for="Bank Name 1">Bank Name 1:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Bank Name 1" placeholder="Enter Bank Name 1" name="bank_name_1" required>
      </div>
    </div>
		<div class="form-group">
      <label class="form-label col-sm-2" for="Bank Account Name 1">Bank Account Name 1:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Bank Account Name 1" placeholder="Enter Bank Account Name 1" name="bank_account_name_1" required>
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Bank Acc Number 1">Bank Acc Number 1:</label>
      <div class="col-sm-3">
        <input type="number" class="form-control" id="Bank Acc Number 1" placeholder="Enter Bank Acc Number 1" name="bank_account_number_1" required>
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="IFSC Code 1">IFSC Code 1:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="IFSC Code 1" placeholder="Enter IFSC Code 1" name="ifsc_code_1" required>
      </div>
    </div>
	
	<div class="control-group">
      <label class="form-label col-sm-2" for="Bank Address 1">Bank Address 1:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Bank Address 1" placeholder="Enter Bank Address 1" name="bank_address_1" required >
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Bank Name 2">Bank Name 2:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Bank Name 2" placeholder="Enter Bank Name 2" name="bank_name_2">
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Bank Account Name 2">Bank Account Name 2:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Bank Account Name 2" placeholder="Enter Bank Account Name 2" name="bank_account_name_2">
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="IFSC Code 2">IFSC Code 2:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="IFSC Code 2" placeholder="Enter IFSC Code 2" name="ifsc_code_2">
      </div>
    </div>
	
	<div class="control-group">
      <label class="form-label col-sm-2" for="Bank Address 2">Bank Address 2:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Bank Address 2" placeholder="Enter Bank Address 2" name="bank_address_2">
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Create Date">Create Date:</label>
      <div class="col-sm-3">
        <input type="date" class="form-control" id="create_date" placeholder="Enter Date" name="create_date" required>
      </div>
    </div>

	
    <div class="control-group">
      <label class="form-label col-sm-2" for="Modified Date">Modified Date:</label>
      <div class="col-sm-3">
        <input type="date" class="form-control" id="Modified Date" name="modified_date" required>
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Vendor Since Date">Vendor Since Date:</label>
      <div class="col-sm-3">
        <input type="date" class="form-control" id="Vendor Since Date" placeholder="Enter Date" name="vendor_since_date" required>
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Modified By">Modified By:</label>
      <div class="col-sm-3">
        <input type="date" class="form-control" id="Modified By" placeholder="Enter Date" name="modified" required>
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Vendor Status">Vendor Status:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Vendor Status" placeholder="Enter Vendor Status" name="vendor_status" required>
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Record Status">Record Status:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Record Status" placeholder="Enter Record Status" name="record_status" required>
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Vendor Relationship Type">Vendor Relationship Type:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Vendor Relationship Type" placeholder="Enter Vendor Relationship Type" name="Vendor_relationship_type" required>
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Vendor Relationship Details">Vendor Relationship Details:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Vendor Relationship Details" placeholder="Enter Vendor Relationship Details" name="vendor_relationship_details" required>
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Agent ID">Agent ID:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="agent_id" placeholder="Enter Agent ID" name="Agent ID" required>
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Agent Company Name">Agent Company Name:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Agent Company Name" placeholder="Enter Agent Company Name" name="agent_company_name" required>
      </div>
    </div>
		<div class="form-group">
      <label class="form-label col-sm-2" for="Agent Sale Man Name">Agent Sale Man Name:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Agent Sale Man Name" placeholder="Enter Agent Sale Man Name" name="agent_sales_man_name" required>
      </div>
    </div>
		<div class="control-group">
      <label class="form-label col-sm-2" for="Agent Manager Name">Agent Manager Name:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Agent Company Name" placeholder="Enter Agent Company Name" name="agent_manager_name" required>
      </div>
    </div>
		<div class="form-group">
      <label class="form-label col-sm-2" for="Agent Sales Man Phone Number">Agent Sales Man Phone Number:</label>
      <div class="col-sm-3">
        <input type="number" class="form-control" id="Agent Sales Man Phone Number" placeholder="Enter Agent Sales Man Phone Number" name="agent_sales_man_phone_number" required>
      </div>
    </div>
		<div class="control-group">
      <label class="form-label col-sm-2" for="Agent Manager Name Phone Number">Agent Manager Name Phone Number:</label>
      <div class="col-sm-3">
        <input type="number" class="form-control" id="Agent Manager Name Phone Number" placeholder="Enter Agent Manager Name Phone Number" name="agent_manager_name_phone_number" required>
      </div>
    </div>
		<div class="form-group">
      <label class="form-label col-sm-2" for="Agent Commission">Agent Commission:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Agent Commission" placeholder="Enter Agent Commission" name="agent_commission" required>
      </div>
    </div>
		<div class="control-group">
      <label class="form-label col-sm-2" for="Agent Status">Agent Status:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Agent Status" placeholder="Enter Agent Status" name="agent_status" required>
      </div>
    </div>
    <input type="submit"></input>
  </form>
</div>
<div>
    
    
</div>

<div class="container">
  <div class=""style="
    height: 50px;">
      
    
    </div>

    <script type="text/javascript">
    $('#country').change(function(){
    var countryID = $(this).val();    
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('api/get-state-list')}}?country_id="+countryID,
           success:function(res){               
            if(res){
                $("#state").empty();
                $("#state").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#state").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#state").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        $("#city").empty();
    }      
   });
    $('#state').on('change',function(){
    var stateID = $(this).val();    
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{url('api/get-city-list')}}?state_id="+stateID,
           success:function(res){               
            if(res){
                $("#city").empty();
                $.each(res,function(key,value){
                    $("#city").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#city").empty();
            }
           }
        });
    }else{
        $("#city").empty();
    }
        
   });
</script>

@endsection