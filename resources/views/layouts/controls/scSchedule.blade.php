@extends('layouts.app')

@section('htmlheader_title')
SCHEDULE
@endsection

@section('header_css')
<link rel="stylesheet" type="text/css" href="{{ asset('/plugins/timepicker/bootstrap-timepicker.min.css') }}">

<style type="text/css">
	.btn:active, .btn.btn1.active {
	    outline: 0;
	    background-color: red;
	    color: white;
	}
	.btn:active, .btn.btn2.active {
	    outline: 0;
	    background-color: yellow;
	}
	.btn:active, .btn.btn3.active {
	    outline: 0;
	    background-color: pink;
	}
	.btn:active, .btn.btn4.active {
	    outline: 0;
	    background-color: green;
	    color: white;
	}
	.btn:active, .btn.btn5.active {
	    outline: 0;
	    background-color: orange;
	}
	.btn:active, .btn.btn6.active {
	    outline: 0;
	    background-color: blue;
	    color: white;
	}
	.btn:active, .btn.btn7.active {
	    outline: 0;
	    background-color: purple;
	    color: white;
	}
</style>
@endsection

@section('contentHeader')
<section class="content-header">
    <h1>MANAGE SCHEDULE</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>
@endsection

@section('main-content')
<div class="row">
	<div class="col-md-4">
		<div class="box box-solid">
			<div class="box-body">
				<form class="form-horizontal" method="post">
					{{ csrf_field() }}					
					<div class="form-group">
					    <label class="col-sm-4 control-label">time_open</label>
					    <div class="col-sm-6">
		                    <div class="input-group bootstrap-timepicker timepicker">
					            <input id="timepicker-open" type="text" class="form-control input-small">
					            <span class="input-group-addon " onclick="$('#timepicker-open').click();"><i class="glyphicon glyphicon-time"></i></span>
					        </div>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-4 control-label">time_close</label>
					    <div class="col-sm-6">
					    	<div class="input-group bootstrap-timepicker timepicker">
					            <input id="timepicker-close" type="text" class="form-control input-small">
					            <span class="input-group-addon " onclick="$('#timepicker-close').click();"><i class="glyphicon glyphicon-time"></i></span>
					        </div>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-4 control-label">WEEKDAYS</label>
					    <div class="col-sm-8">
					    	<div class="col-xs-4 col-md-12">
					    		<button type="button" name="btn-week" class="btn btn1 btn-default btn-block" data-toggle="button" aria-pressed="false" autocomplete="off"  style="text-align: left;"><i class="fa fa-fw fa-circle-o"></i> SUNDAY</button>
					    	</div>
					    	<div class="col-xs-4 col-md-12">
					    		<button type="button" name="btn-week" class="btn btn2 btn-default btn-block" data-toggle="button" aria-pressed="false" autocomplete="off"  style="text-align: left;"><i class="fa fa-fw fa-circle-o"></i> MONDAY</button>
					    	</div>
					    	<div class="col-xs-4 col-md-12">
					    		<button type="button" name="btn-week" class="btn btn3 btn-default btn-block" data-toggle="button" aria-pressed="false" autocomplete="off"  style="text-align: left;"><i class="fa fa-fw fa-circle-o"></i> TUESDAY</button>
					    	</div>
					    	<div class="col-xs-4 col-md-12">
					    		<button type="button" name="btn-week" class="btn btn4 btn-default btn-block" data-toggle="button" aria-pressed="false" autocomplete="off"  style="text-align: left;"><i class="fa fa-fw fa-circle-o"></i> WEDNESDAY</button>
					    	</div>
					    	<div class="col-xs-4 col-md-12">
					    		<button type="button" name="btn-week" class="btn btn5 btn-default btn-block" data-toggle="button" aria-pressed="false" autocomplete="off"  style="text-align: left;"><i class="fa fa-fw fa-circle-o"></i> THURSDAY</button>
					    	</div>
					    	<div class="col-xs-4 col-md-12">
					    		<button type="button" name="btn-week" class="btn btn6 btn-default btn-block" data-toggle="button" aria-pressed="false" autocomplete="off"  style="text-align: left;"><i class="fa fa-fw fa-circle-o"></i> FRIDAY</button>
					    	</div>
					    	<div class="col-xs-4 col-md-12">
					    		<button type="button" name="btn-week" class="btn btn7 btn-default btn-block" data-toggle="button" aria-pressed="false" autocomplete="off"  style="text-align: left;"><i class="fa fa-fw fa-circle-o"></i> SATURDAY</button>
					    	</div>
							  	
					    </div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">lang_station_id;</label>
						<div class="col-sm-9">
							<label class="checkbox-inline">
							  <input type="checkbox" name="select_hardware[]" value=""> SCT10001
							</label>
						</div>
					</div>
		            <hr>
					<div>
				        <a href="#" class="btn btn-lg btn-flat btn-danger" role="button" onclick="drop_time();"><span class="fa fa-close fa-fw"> </span> ปิด</a>
				        <span class="pull-right">
				            <button name="submit_edit" type="submit" class="btn btn-lg btn-flat btn-success" id="submit_edit"><span class="fa fa-clock-o fa-fw"> </span> ตั้งเวลา</button> 
				        </span>
				    </div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		dddd
	</div>
</div>

@endsection


@section('footer_js')
<script type="text/javascript" src="{{ asset('/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<script type="text/javascript">
	//Timepicker
    $('#timepicker-open').timepicker({
      	showMeridian: false,
      	defaultTime: 'current'
    });
    $('#timepicker-close').timepicker({
      	showMeridian: false,
      	defaultTime: 'current'
    });
    $( "button[name='btn-week']" ).click(function() {
    	$('i' , this).toggleClass('fa-circle-o fa-check-circle-o');
    });
</script>
@endsection


@section('footer')

<div class="row">
	<div class="col-md-1">
		<a href="{{ url('control/scSlide') }}" data-toggle="tooltip" data-placement="top" title="MANAGE SLIDE"><img src="{{ asset('images/menu/video.png') }}" class="imgmenu" width="40"></a>
	</div>
	<div class="col-md-1">
		<a href="{{ url('control/scMessage') }}" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><img src="{{ asset('images/menu/message.png') }}" class="imgmenu" width="40"></a>
	</div>
	<div class="col-md-1">
		<a href="{{ url('control/scRecommended') }}" data-toggle="tooltip" data-placement="top" title="MANAGE RECOMMENDED BOOK"><img src="{{ asset('images/menu/add_book.png') }}" class="imgmenu" width="40"></a>
	</div>
	<div class="col-md-1">
		<a href="#" data-toggle="tooltip" data-placement="top" title="SCHEDULE"><img src="{{ asset('images/menu/schedule.png') }}" width="40"></a>
	</div>
</div>

@endsection