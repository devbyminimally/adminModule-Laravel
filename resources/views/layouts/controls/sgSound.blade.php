@extends('layouts.app')

@section('htmlheader_title')
SOUND
@endsection

@section('header_css')

@endsection

@section('contentHeader')
<section class="content-header">
    <h1>SOUND </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>
@endsection

@section('main-content')
<div class="row">
	<div class="col-lg-3">
		<div class="box">
	        <div class="box-body no-padding">
	        	<table class="table">
				    <thead>
				      	<tr>
				        	<th style="width: 75%;">LASTEST SOUND</th>
				        	<th style="width: 20%;">Select</th>
				      	</tr>
				    </thead>
				    <tbody>
				      	<tr>
				      		<form method="post">
				        	<td>sound.mp3</td>
				        	<td align="center"><button class="btn btn-xs" type="submit" name="change_sound" ><i class="fa fa-volume-up fa-fw" style="color: #4F4F4F;"></i></button></td>
				        	</form>
				      	</tr>
				    </tbody>
				</table>
	        </div>
	    </div>
	</div>
	<div class="col-lg-8">
		<div class="box ">
	        <div class="box-body">
	        	<form id="uploadSound" enctype="multipart/form-data" method="post" class="form-inline">
			        <div class="form-group">
						<label>Upload Sound Alarm</label>
						<input type="file" name="sound" class="form-control" />
						<button type="submit" class="btn btn-primary btn-flat" name="submit"><i class="fa fa-upload fa-fw"></i> Upload Sound </button> 
					</div>
				</form>
				<hr>
				<form class="form-inline" method="post" name="form_select_sound">
					<div class="form-group">
						<label>Select Alarm</label>
						
						<select class="form-control" id="cboSoundAlarm" name="cboSoundAlarm">
							<option>test sound.mp3</option>
						</select>
						<button onclick="saveSetting();" type="submit" name="select_sound" class="btn btn-success btn-flat"><i class="fa fa-check fa-fw"></i> Select Sound</button>
						<button onclick="deleteSound();" class="btn btn-danger btn-flat"><i class="fa fa-close fa-fw"></i> Delete Sound</button>
					</div>
				</form>
				<hr>					
				<table class="table">
					<tbody>
						<tr>
							<th>ทดสอบเสียงจาก Software</th>
							<td>
								<audio controls> 
									<source src="#" type="audio/mpeg"> 
									Your browser does not support the audio element. 
								</audio>
							</td>
						</tr>
						<tr>
							<th>ทดสอบเสียงจาก Hardware</th>
							<td id="test_sound"><a onclick="play_control();" class="btn btn-app"><i class="fa fa-play text-primary" ></i> Play</a></td>
						</tr>
					</tbody>
				</table>
					
					
		    </div>            
		</div>
	</div>
</div>

@endsection


@section('footer_js')

@endsection


@section('footer')

<div class="row">
	<div class="col-md-1">
		<a href="{{ url('control/sgColor') }}" data-toggle="tooltip" data-placement="top" title="MANAGE SLIDE"><img src="{{ asset('images/menu/color.png') }}" class="imgmenu" width="40"></a>
	</div>
	<div class="col-md-1">
		<a href="{{ url('control/sgSound') }}" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><img src="{{ asset('images/menu/sound.png') }}" width="40"></a>
	</div>
</div>

@endsection