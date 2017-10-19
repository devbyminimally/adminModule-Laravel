@extends('layouts.app')

@section('htmlheader_title')
Message
@endsection

@section('header_css')
<link rel="stylesheet" type="text/css" href="{{ asset('/plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
@endsection

@section('contentHeader')
<section class="content-header">
    <h1>MANAGE MESSAGE </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>
@endsection

@section('main-content')
<div class="row">
	<div class="col-md-6">
		<div class="box box-solid">
			<div class="box-body">
				<form class="form-horizontal" method="post">
					{{ csrf_field() }}					
					<div class="form-group">
		    			<label class="col-sm-3 control-label">message_thai;</label>
		    			<div class="col-sm-8">
		    				<textarea class="form-control" name="msg_pre_th" id="msg_pre_th" rows="3"></textarea>
							<font color="gray">lang_message_left_1; <span>1000</span> lang_message_left_2;</font>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">message_english;</label>
						<div class="col-sm-8">
							<textarea class="form-control" name="msg_pre_en" id="msg_pre_en" rows="3"></textarea>
							<font color="gray">lang_message_left_1; <span>1000</span> lang_message_left_2;</font>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">lang_station_id;</label>
						<div class="col-sm-6">
							<label class="checkbox-inline">
							  <input type="checkbox" name="select_hardware[]" value="value_msg['hardware_cmd_value'];"> value_msg['hardware_cmd_value'];
							</label>
						</div>
					</div>
					<div class="form-group" align="right">
						<div class="col-sm-offset-3 col-sm-9">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><u>ADVANCED SETUP</u></a>
						</div>
					</div>
					<div class="collapse" id="collapseExample">
						<div class="form-group">
							<hr style="margin-bottom: 10px;margin-top: 0px;">
							<label class="col-sm-3 control-label">lang_playspeed;</label>
							<div class="col-sm-6">
								<select class="form-control" name="playspeed">
									<option value="6" selected>NORMAL</option>
									<option value="150">SLOW</option>
									<option value="10">FAST</option>
									<option value="15">VERY FAST</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">lang_fontsize;</label>
							<div class="col-sm-6">
								<div class="input-group">
									<input type="text" name="msg_size" id="msg_size" class="form-control" value="14">
									<span class="input-group-addon">PX</span>
								</div>
								<font color="gray" size="2">**lang_remark_fontsize;</font>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">lang_fontcolor;</label>
							<div class="col-sm-6">
								<div class=" input-group my-colorpicker2">
									<input type="text" class="form-control" name="msg_color" id="msg_color" value="#000000">
									<div class="input-group-addon"><i></i></div>
			          			</div>
							</div>
						</div>
						<hr style="margin-bottom: 10px;margin-top: 0px;">
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
							<button type="submit" name="change_msg" class="btn btn-success btn-flat"><i class="fa fa-save"></i> SAVE</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="box box-solid">
			<div class="box-body">
				<div class="media">
  					<div class="media-left media-middle">
						<button class="btn btn-default" disabled="true"><i class="fa fa-check fa-fw"></i> USING</button>
					</div>
					<div class="media-body">
						<marquee>เจ็บปวด เพราะคิดไปไกล เจ็บใจเพราะคิดไปเอง</marquee>
						<marquee>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form Ipsum available.</marquee>
					</div>
				</div>
			</div>
		</div>
		<div class="box box-solid">
			<div class="box-body">
				<div class="media">
  					<div class="media-left media-middle">
						<button class="btn btn-success">APPLY</button>
					</div>
					<div class="media-body">
						<marquee>โปรโมชั่นรับลมร้อน > ลองคบกันก่อน ดีไหม โปรฯ นี้ รับเฉพาะคนรู้ใจ > หมดโปรฯ เมื่อไหร่ ตัวใครตัวมัน</marquee>
						<marquee>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</marquee>
					</div>
				</div>
			</div>
		</div>
		<div class="box box-solid">
			<div class="box-body">
				<div class="media">
  					<div class="media-left media-middle">
						<button class="btn btn-success">APPLY</button>
					</div>
					<div class="media-body">
						<marquee>โปรโมชั่นรับลมร้อน > ลองคบกันก่อน ดีไหม โปรฯ นี้ รับเฉพาะคนรู้ใจ > หมดโปรฯ เมื่อไหร่ ตัวใครตัวมัน</marquee>
						<marquee>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form Ipsum available.</marquee>
					</div>
				</div>
			</div>
		</div>
		<div class="box box-solid">
			<div class="box-body">
				<div class="media">
  					<div class="media-left media-middle">
						<button class="btn btn-success">APPLY</button>
					</div>
					<div class="media-body" width="100%">
						<marquee>กขคงจ</marquee>
						<marquee>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</marquee>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


@section('footer_js')
<script type="text/javascript" src="{{ asset('/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>

<script type="text/javascript">
	$(function() {
        $(".my-colorpicker2").colorpicker();
    });
</script>
@endsection


@section('footer')

<div class="row">
	<div class="col-md-1">
		<a href="{{ url('control/scSlide') }}" data-toggle="tooltip" data-placement="top" title="MANAGE SLIDE"><img src="{{ asset('images/menu/video.png') }}" class="imgmenu" width="40"></a>
	</div>
	<div class="col-md-1">
		<a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><img src="{{ asset('images/menu/message.png') }}" width="40"></a>
	</div>
	<div class="col-md-1">
		<a href="{{ url('control/scRecommended') }}" data-toggle="tooltip" data-placement="top" title="MANAGE RECOMMENDED BOOK"><img src="{{ asset('images/menu/add_book.png') }}" class="imgmenu" width="40"></a>
	</div>
	<div class="col-md-1">
		<a href="{{ url('control/scSchedule') }}" data-toggle="tooltip" data-placement="top" title="SCHEDULE"><img src="{{ asset('images/menu/schedule.png') }}" class="imgmenu" width="40"></a>
	</div>
</div>

@endsection