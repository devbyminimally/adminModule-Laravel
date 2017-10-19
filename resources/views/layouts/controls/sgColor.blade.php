@extends('layouts.app')

@section('htmlheader_title')
LED
@endsection

@section('header_css')
<link rel="stylesheet" href="{{ asset('/plugins/farbtastic/farbtastic.css') }}" type="text/css" />
@endsection

@section('contentHeader')
<section class="content-header">
    <h1>LIGHT </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>
@endsection

@section('main-content')
<div class="row">
	<form method="post" class="form-horizontal">
	    <div class="col-xs-4 col-lg-3">
	    	<div class="box">
	            <div class="box-body no-padding">
	            	<table class="table">
				        <thead>
				          	<tr>
				            	<th style="width: 75%;">LASTEST COLOR</th>
				            	<th style="width: 20%;">Preview</th>
				          	</tr>
				        </thead>
				        <tbody>
				          	<tr>
				            	<td>save</td>
				            	<td align="center"><button class="btn btn-xs" type="submit" name="change_color" ><i class="fa fa-eye fa-fw" style="color: #D3D3D3;"></i></button></td>
				          	</tr>
				        </tbody>
				    </table>
		        </div>
		    </div>
		</div>
		<div class="col-xs-8 col-lg-5">
			<div class="box">
	            <div class="box-header with-border">
	              <h3 class="box-title">NEW COLOR</h3>
	            </div><!-- /.box-header -->
	            <div class="box-body">
			        <div align="center">
			          	<div id="picker" onmousemove="document.getElementById('preview_color').style='width:250px;background-color:'+document.getElementById('hex').value;"></div><br>
			          	<div class="form-group">
						    <label class="col-sm-4 control-label">COLOR CODE</label>
						    <div class="col-sm-8">
						      	<input type="text" style="font-size:20px;font-weight: bold" class="form-control" id="hex" name="hex" value="#12345" />
						      	<input type="hidden" name="cboProfile" id="cboProfile">
						    </div>
						</div><hr>
			          	<button type="submit" name="bnt" id="bnt" class="btn btn-success btn-lg btn-flat" > APPLY</button><br>
					</div>
		        </div>
		    </div>            
		</div>
	</form>
	<div class="col-xs-12 col-lg-4">
		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">PREVIEW</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
		        <div align="center">
			        <div style="width: 250px;" id="preview_color">
			        	<img src="{{ asset('imgHardware/sg.png') }}" height="400px">
			        </div>
				</div>
	        </div>
	    </div>            
	</div>
</div>

@endsection


@section('footer_js')
<script type="text/javascript" src="{{ asset('/plugins/farbtastic/farbtastic.js') }}"></script>
<script type="text/javascript">
	$('#picker').farbtastic('#hex');
</script>
@endsection


@section('footer')

<div class="row">
	<div class="col-md-1">
		<a href="{{ url('control/sgColor') }}" data-toggle="tooltip" data-placement="top" title="MANAGE SLIDE"><img src="{{ asset('images/menu/color.png') }}" width="40"></a>
	</div>
	<div class="col-md-1">
		<a href="{{ url('control/sgSound') }}" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><img src="{{ asset('images/menu/sound.png') }}" class="imgmenu" width="40"></a>
	</div>
</div>

@endsection