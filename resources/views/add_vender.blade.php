@extends('layouts.app')
@extends('layouts.header')

@section('content')
<div class="container">
  <div class=""style="
    margin-top: 50px;">
      
    
    </div>
  <form class="form-horizontal" action="/action_page.php">
    <div class="control-group">
      <label class="form-label col-sm-2" for="Vendor Id:">Vendor Id:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Vendor Id:">
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Vendor Id Display">Vendor Id Display:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Vendor Id Display" >
      </div>
    </div>
      
       <div class="form-group">
                <label for="title">Select Country:</label>
                {!! Form::select('country', ['' => 'Select'] +$countries->toArray(),'',array('class'=>'form-control','id'=>'country','style'=>'width:350px;'));!!}
               
            </div>
            <div class="form-group">
                <label for="title">Select State:</label>
                <select name="state" id="state" class="form-control" style="width:350px">
                </select>
            </div>
         
            <div class="form-group">
                <label for="title">Select City:</label>
                <select name="city" id="city" class="form-control" style="width:350px">
                </select>
            </div>
      
	<div class="form-group">
      <label class="form-label col-sm-2" for="Phone Number">Phone Number:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Phone Number" placeholder="Enter Phone Number" name="Phone Number">
      </div>
    </div>
 	<div class="control-group">
      <label class="form-label col-sm-2" for="Whatsapp Number">Whatsapp Number:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Whatsapp Number" placeholder="Enter Whatsapp Number" name="Whatsapp Number">
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Whatsapp Number">Contact Name:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Contact Name" placeholder="Enter Contact Name" name="Contact Name">
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Bill Name">Bill Name:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Bill Name" placeholder="Enter Bill Name" name="Bill Name">
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Cash Discount Type">Cash Discount Type:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Cash Discount Type" placeholder="Enter Cash Discount Type" name="Cash Discount Type">
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="CD Value">CD Value:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="CD Value" placeholder="Enter CD Value" name="CD Value">
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Items Available">Items Available:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Items Available" placeholder="Enter Items Available" name="Items Available">
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Preferred Item">Preferred Item:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Preferred Item" placeholder="Enter Preferred Item" name="Preferred Item">
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Credit Period">Credit Period:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Credit Period" placeholder="Enter Credit Period" name="Phone Number">
      </div>
    </div>
		<div class="control-group">
      <label class="form-label col-sm-2" for="Over Due Penalty">Over Due Penalty:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Over Due Penalty" placeholder="Enter Over Due Penalty" name="Over Due Penalty">
      </div>
    </div>
		<div class="form-group">
      <label class="form-label col-sm-2" for="Priority">Priority:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Priority" placeholder="Enter Priority" name="Priority">
      </div>
    </div>
		<div class="control-group">
      <label class="form-label col-sm-2" for="Bank Name 1">Bank Name 1:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Bank Name 1" placeholder="Enter Bank Name 1" name="Bank Name 1">
      </div>
    </div>
		<div class="form-group">
      <label class="form-label col-sm-2" for="Bank Account Name 1">Bank Account Name 1:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Bank Account Name 1" placeholder="Enter Bank Account Name 1" name="Bank Account Name 1">
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Bank Acc Number 1">Bank Acc Number 1:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Bank Acc Number 1" placeholder="Enter Bank Acc Number 1" name="Bank Acc Number 1">
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="IFSC Code 1">IFSC Code 1:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="IFSC Code 1" placeholder="Enter IFSC Code 1" name="IFSC Code 1">
      </div>
    </div>
	
	<div class="control-group">
      <label class="form-label col-sm-2" for="Bank Address 1">Bank Address 1:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Bank Address 1" placeholder="Enter Bank Address 1" name="Bank Address 1">
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Bank Name 2">Bank Name 2:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Bank Name 2" placeholder="Enter Bank Name 2" name="Bank Name 2">
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Bank Account Name 2">Bank Account Name 2:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Bank Account Name 2" placeholder="Enter Bank Account Name 2" name="Bank Account Name 2">
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="IFSC Code 2">IFSC Code 2:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="IFSC Code 2" placeholder="Enter IFSC Code 2" name="IFSC Code 2">
      </div>
    </div>
	
	<div class="control-group">
      <label class="form-label col-sm-2" for="Bank Address 2">Bank Address 2:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Bank Address 2" placeholder="Enter Bank Address 2" name="Bank Address 2">
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Create Date">Create Date:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Create Date" placeholder="Enter Date" name="Date">
      </div>
    </div>

	
    <div class="control-group">
      <label class="form-label col-sm-2" for="Modified Date">Modified Date:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Modified Date" name="last Modified Date">
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Vendor Since Date">Vendor Since Date:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Vendor Since Date" placeholder="Enter Date" name="Vendor Since Date">
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Modified By">Modified By:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Modified By" placeholder="Enter Date" name="last Modified">
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Vendor Status">Vendor Status:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Vendor Status" placeholder="Enter Vendor Status" name="Vendor Status">
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Record Status">Record Status:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Record Status" placeholder="Enter Record Status" name="Record Status">
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Vendor Relationship Type">Vendor Relationship Type:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Vendor Relationship Type" placeholder="Enter Vendor Relationship Type" name="Vendor Relationship Type">
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Vendor Relationship Details">Vendor Relationship Details:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Vendor Relationship Details" placeholder="Enter Vendor Relationship Details" name="Vendor Relationship Details">
      </div>
    </div>
	<div class="form-group">
      <label class="form-label col-sm-2" for="Agent ID">Agent ID:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Agent ID" placeholder="Enter Agent ID" name="Agent ID">
      </div>
    </div>
	<div class="control-group">
      <label class="form-label col-sm-2" for="Agent Company Name">Agent Company Name:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Agent Company Name" placeholder="Enter Agent Company Name" name="Agent Company Name">
      </div>
    </div>
		<div class="form-group">
      <label class="form-label col-sm-2" for="Agent Sale Man Name">Agent Sale Man Name:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Agent Sale Man Name" placeholder="Enter Agent Sale Man Name" name="Agent Sale Man Name">
      </div>
    </div>
		<div class="control-group">
      <label class="form-label col-sm-2" for="Agent Manager Name">Agent Manager Name:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Agent Company Name" placeholder="Enter Agent Company Name" name="Agent Company Name">
      </div>
    </div>
		<div class="form-group">
      <label class="form-label col-sm-2" for="Agent Sales Man Phone Number">Agent Sales Man Phone Number:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Agent Sales Man Phone Number" placeholder="Enter Agent Sales Man Phone Number" name="Agent Sales Man Phone Number">
      </div>
    </div>
		<div class="control-group">
      <label class="form-label col-sm-2" for="Agent Manager Name Phone Number">Agent Manager Name Phone Number:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Agent Manager Name Phone Number" placeholder="Enter Agent Manager Name Phone Number" name="Agent Manager Name Phone Number">
      </div>
    </div>
		<div class="form-group">
      <label class="form-label col-sm-2" for="Agent Commission">Agent Commission:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Agent Commission" placeholder="Enter Agent Commission" name="Agent Commission">
      </div>
    </div>
		<div class="control-group">
      <label class="form-label col-sm-2" for="Agent Status">Agent Status:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="Agent Status" placeholder="Enter Agent Status" name="Agent Status">
      </div>
    </div>
  </form>
    <button>Submit</button>
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