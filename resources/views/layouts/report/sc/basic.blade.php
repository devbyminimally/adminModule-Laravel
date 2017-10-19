@extends('layouts.app')

@section('htmlheader_title')
SELFCHECK REPORT
@endsection

@section('header_css')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('/plugins/select2/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/plugins/daterangepicker/daterangepicker-bs3.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}">

@endsection

@section('contentHeader')
<section class="content-header">
    <h1>SELFCHECK REPORT</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>
@endsection

@section('main-content')
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">BASIC</a></li>
        <li><a href="#">WITH PHOTO</a></li>
        <li class="pull-right">
			<a data-toggle="collapse" href="#collapseExample" aria-expanded="true" aria-controls="collapseExample"><i class="fa fa-chevron-down"></i></a>
		</li>
    </ul>
    
    <div class="tab-content collapse in" id="collapseExample">
		<div class="row">
		    <div class="col-sm-12">
		    	<form class="form-horizontal" id="sc_form" name="sc_form" method="post" >
		    		<div class="col-md-12">	
		    			<div class="form-group">
						    <label class="col-md-2 control-label">SEARCH</label>
						    <div class="col-md-8">
			                    <input type="text" class="form-control input-lg" name="search" placeholder="KEYWORD....">
			                </div><!-- /.input group -->
						</div>
						<hr>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						    <label class="col-md-4 control-label">select_date</label>
						    <div class="col-md-7">
						    	<div class="input-group">
				                    <div class="input-group-addon">
				                      	<i class="fa fa-calendar"></i>
				                    </div>
				                    <input type="text" class="form-control pull-right" name="date" id="reservation">
				                </div>
			                </div><!-- /.input group -->
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group ">
						    <label class="col-md-4 control-label">station_id</label>
						    <div class="col-md-6">
							    <select class="form-control" name="group" >
							    	<option value="all">all</option>
							    	<option>SCT10001</option>
							    </select>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group ">
						    <label class="col-md-4 control-label">type</label>
						    <div class="col-md-6">
							    <select class="form-control" name="type">
							    	<option value="all">all</option>
							    	<option value="BORROW">borrow</option>
							    	<option value="RETURN">return</option>
							    	<option value="RENEW">renew</option>
							    </select>
							 </div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group ">
						    <label class="col-md-4 control-label">status</label>
						    <div class="col-md-6">
							    <select class="form-control" name="status">
							    	<option value="all">all</option>
							    	<option value="1">success</option>
							    	<option value="0">fail</option>
							    </select>
							 </div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group ">
			                <label class="col-md-2 control-label">field</label>
			                <div class="col-md-8">
				                <select class="form-control select2" name="fieldName[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
					                <option value="1" selected="selected">date</option>
					                <option value="2" selected="selected">station_id</option>
					    			<option value="3" selected="selected">type</option>
				                    <option value="4" selected="selected">member_id</option>
				                    <option value="5" selected="selected">member_name</option>
				                    <option value="6" selected="selected">book_id</option>
				                    <option value="7" selected="selected">book_name</option>
				                    <option value="8" selected="selected">due_date</option>
				                    <option value="9" selected="selected">status</option>
				                </select>
				             </div>
			            </div>
			        </div>
			        <div class="col-md-12">
			            <div class="form-group">
							<div class="col-md-offset-2 col-md-2">
								<button type="button" name="report_sc" id="report_sc" class="btn btn-primary btn-block btn-flat"><b>REPORT</b></button>
							</div>
						</div>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</div>
<div class="box box-primary">
	<div class="box-body">
		<div class="writeinfo"></div>
		<div class="row">
			<div class="col-md-12" align="right">
				<span><i class="fa fa-fw fa-download"></i> <b>DOWNLOAD :</b>&nbsp; </span>
				<a href="#"><img src="{{ asset('images/downloadIcons/pdf.png') }}" width="30"></a>
				<a href="#"><img src="{{ asset('images/downloadIcons/excel.png') }}" width="30"></a>
				<a href="#"><img src="{{ asset('images/downloadIcons/word.png') }}" width="30"></a>
			</div>
			<div class="col-md-12">&nbsp;</div>
			<div class="col-md-12">
				<table class="table table-bordered table-hover" id="dataTables-sc">
					<thead>
						<tr>
							<th>NO.</th>
							<th>DATETIME</th>
							<th>STTION ID</th>
							<th>TYPE</th>
							<th>MEMBER ID</th>
							<th>MEMBER NAME</th>
							<th>BOOK ID</th>
							<th>BOOK NAME</th>
							<th>CALL NO.</th>
							<th>DUE DATE</th>
							<th>STATUS</th>
						</tr>
					</thead>
					<tbody>
						@foreach($scBasic as $key => $scBasic1)
						<tr>
							<!--station_id,datetime,type,member_id,member_name,book_id,book_name,call_no,due_date,status-->
							<td>{{ $key+1 }}</td>
							<td>{{ $scBasic1['datetime'] }}</td>
							<td>{{ $scBasic1['station_id'] }}</td>
							<td>{{ strtoupper($scBasic1['type']) }}</td>
							<td>{{ $scBasic1['member_id'] }}</td>
							<td>{{ $scBasic1['member_name'] }}</td>
							<td>{{ $scBasic1['book_id'] }}</td>
							<td>{{ $scBasic1['book_name'] }}</td>
							<td>{{ $scBasic1['call_no'] }}</td>
							<td>{{ $scBasic1['due_date'] }}</td>
							<td>
								@if($scBasic1['status'] == 1 ) 
									SUCCESS 
								@else
									FAIL
								@endif
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		
		
	</div>
</div>


@endsection

@section('footer_js')
<script type="text/javascript" src="{{ asset('/plugins/select2/select2.full.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/plugins/daterangepicker/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>


<script type="text/javascript">
  	$('select').select2();

  	$('#reservation').daterangepicker({
    	"ranges" : {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
    	"opens": "right",
    	"showDropdowns": true,
        "showCustomRangeLabel": false,
    	"alwaysShowCalendars": true,
        "startDate": moment(),
        "endDate"  : moment()
  	});

    $('#dataTables-sc').DataTable({
            responsive: true,
            "searching" : false,
            "pageLength": 10,
            "scrollX": true,
            "lengthChange": false
    });

    $("#report_sc").click(function(){   
    	var serializedData = $("#sc_form").serialize();
    	//$(".writeinfo").append(serializedData);
    	$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    	var requestAjax = $.ajax({
	        url: "request",
	        type: 'POST',
	        data: serializedData,
	        beforeSend: function() {
               //$("#loadingAjax").show();
               //$("#formAddBook").hide();
            },
	        success: function( data ){
	            console.log(data.msg);
	            $(".writeinfo").append(data.msg);
	            alert(data.msg);
	            
	        },
	        error: function( data ){
	        	console.log(data);
	        }
	    });
	});
</script>

@endsection

@section('footer')
<div class="row">
	<div class="col-md-1">
		<a href="#" data-toggle="tooltip" data-placement="top" title="MANAGE SLIDE"><img src="{{ asset('imgHardware/sc.png') }}" width="30"></a>
	</div>
	<div class="col-md-1">
		<a href="#" data-toggle="tooltip" data-placement="top" title="MANAGE SLIDE"><img src="{{ asset('imgHardware/sg.png') }}" class="imgmenu" width="30"></a>
	</div>
	<div class="col-md-1">
		<a href="#" data-toggle="tooltip" data-placement="top" title="MANAGE SLIDE"><img src="{{ asset('imgHardware/ss.png') }}" class="imgmenu" width="40"></a>
	</div>
	<div class="col-md-1">
		<a href="#" data-toggle="tooltip" data-placement="top" title="MANAGE SLIDE"><img src="{{ asset('imgHardware/bd.png') }}" class="imgmenu" width="30"></a>
	</div>
</div>
@endsection