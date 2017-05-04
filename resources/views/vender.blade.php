@extends('layouts.app')
@extends('layouts.header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@section('content')

   <center><h1>Vendorx Page</h1></center> 
   
   <div class="col-md-12">
   	<table id="vendor-table">
   		<thead>
   			<td>Vendor ID</td>
   			<td>Vendor name</td>
   			<td>City</td>
   			<td>State</td>
   			<td>Phone number</td>
   			<td>Vendor status</td>
   			<td>Action</td>
   		</thead>
   </table>
   </div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$('#vendor-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{URL::route('show-vendor-table')}}"
    });
</script>   
@endsection
