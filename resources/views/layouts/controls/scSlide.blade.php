@extends('layouts.app')

@section('htmlheader_title')
STATUS
@endsection

@section('header_css')

@endsection

@section('contentHeader')
<section class="content-header">
    <h1>MANAGE SLIDE </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>
@endsection

@section('main-content')
	<div class="row">
		<div class="col-lg-6">	
			<div class="row">
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-header with-border">
							<i class="fa fa-upload"></i>
					      	<h3 class="box-title">อัพโหลดสื่อประชาสัมพันธ์</h3>
					      	<div class="box-tools pull-right">
						      	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						    </div><!-- /.box-tools -->
					    </div><!-- /.box-header -->
						<div class="box-body">
							<form name="uploadSlide" id="uploadSlide" enctype="multipart/form-data" method="post" >
								{{ csrf_field() }}
								<div class="form-group">
								    <label>ประเภท</label>
								    <div class="radio">
								    	<label class="radio-inline">
								    		<input type="radio" id="radio_image" name="media_type" value="radio_image" onclick="tab_radio();" checked> รูปภาพ
								    	</label>
								    	<label class="radio-inline">
								    		<input type="radio" id="radio_video" name="media_type" value="radio_video" onclick="tab_radio();"> วิดีโอ
								    	</label>
								    </div>
								</div>
								<div id="upload_file">
									<div class="form-group">
									    <label>อัพโหลดรูปภาพ</label>
									    <input type="file" name="cover_book" id="cover_book" class="form-control" value="">
									    @if($errors->any())
											<span class="text-danger">
												@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
							            		@endforeach
							            	</span>
										@endif
									</div>
								</div>
								<button type="submit" name="submit_upload" class="btn btn-success btn-block btn-flat">อัพโหลด</button>
							</form>
						</div>
					</div>
					<div class="box box-primary">
					     <div class="box-body" style="max-height: 400px;overflow-y: auto;">
					     	<table class="table">
						        <thead>
						          	<tr>
						            	<th style="width: 50%;">Playlist Name</th>
						            	<th style="width: 50%;"></th>

						          	</tr>
						        </thead>
						        <tbody>
						        	@foreach($playlistShow as $playlistShowValue)
						          	<tr>
						            	<td>{{ $playlistShowValue['playlistName'] }}</td>
						            	<td align="right">
						            		<button class="btn btn-success btn-xs" type="button" name="playlist_select" data-toggle="modal" data-target="#mySelectPlaylist" >เลือก</button>
						            		<button class="btn btn-primary btn-xs" type="button" name="playlist_preview"><i class="fa fa-eye fa-fw"></i></button>
						            		<button class="btn btn-danger btn-xs" type="submit" name="playlist_delete"><i class="fa fa-trash-o fa-fw"></i></button>
						            	</td>
						          	</tr>
						          	@endforeach
						        </tbody>
						    </table>
						</div>
					</div>			
				</div>
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-header with-border">
							<i class="fa fa-file-image-o"></i>
			              	<h3 class="box-title">MY FILE</h3>
			            </div><!-- /.box-header -->
					    <div class="box-body" style="max-height: 470px;overflow-y: auto;">
					    	<ul class="products-list product-list-in-box">
					    		@foreach($itemShow as $itemShowValue)
			                    <li class="item">
			                      	<div class="product-img">
				                      	<label>
				                        	<input type="checkbox" class="checkit" name="select_file[]" />
				                        	<span></span>
				                        </label>
				                        
			                        		<img src="{{ asset('images/no_book_cover.jpg') }}" alt="Product Image" style="margin-left: 5px;">
			                        	
			                      	</div>
			                      	<div class="product-info" style="margin-left: 90px;">
			                        	<a href="#" class="product-title">123</a>
			                        	<a href="#"><span class="label label-danger pull-right"><i class="fa fa-trash-o"></i></span></a>
			                        	<span class="product-description">
			                          		123
			                        	</span>
			                      	</div>
			                    </li>
			                    @endforeach
			                </ul>
			                <!--<div id="test"></div>-->
						</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="col-lg-6">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-primary box-solid">
			            <div class="box-header with-border">
			              	<h3 class="box-title">กรุณาเลือกไฟล์จาก MY FILE เพื่อสร้าง Playlist ของคุณ</h3>
			            </div>
			            <div class="box-body">
			            	<div id="media_selected" class="well" style="padding: 10px;border-radius: 0px;overflow-x: auto;overflow-y: hidden;white-space: nowrap;height:100px;">
			            		<!-- แสดงวิดีโอและรูปภาพที่เลือก -->
			            	</div>
			            	<form method="post">
					            <div class="row">
					            	<div class="col-xs-6">
										<div class="input-group">
											<input type="hidden" name="detail" id="detail" class="form-control" >
											<input type="text" name="playlist_name" class="form-control" data-validation="required" data-validation-error-msg=" " placeholder="Playlist Name" >
											<span class="input-group-btn">
												<button type="submit" name="playlist_save" class="btn btn-success btn-flat"> <i class="fa fa-save"></i>  สร้าง</button>
											</span>
										</div>
									</div>
									<div class="col-xs-3">
										<button type="button" name="video_preview" id="video_preview" class="btn btn-primary btn-flat btn-block" onclick="preview();"> <i class="fa fa-eye"></i>  ตัวอย่าง</button>
									</div>
									<div class="col-xs-3">
										<button type="button" name="playlist_clear" class="btn btn-default btn-flat btn-block" onclick="uncheckall();"> ล้าง</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="box box-primary box-solid">
					     <div class="box-body" style="height: 350px;">
					     	<iframe src="about:blank;" id="ifr_video_preview" style="height: 100%;width: 100%;" scrolling="no" frameborder="0">
					     	</iframe>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>

@endsection

@section('footer_js')

<script type="text/javascript">
	$(document).ready(function(){
		
		$('input:radio[name=media_type]').change(function() {
       		if(this.value == 'radio_image'){
       			dataAjax = {
   								'cover_book': $('input[name=cover_book]').val(),
   								'type': this.value
   							} ;
       			urlAjax = "../control/scSlide/addImage";
       		}else{
       			dataAjax = {
   								'image_cover': $('#image_cover').val(),
   								'video_content': $('#video_content').val(),
   								'type': this.value
   							} ;
       			urlAjax = "../control/scSlide/addVideo";
       		}
       	});
		$('#uploadSlide').on('submit', function(e) {
			var coverBookAjax = $('input[name=cover_book]').val().replace(/C:\\fakepath\\/i, '');
	       	e.preventDefault(); 
	       	//var token = $('input[name=_token]').val();
	       	$.ajaxSetup({
	            headers: {
	                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	            }
	        });
	       	var requestAjax = $.ajax({
	           	type: "POST",
	           	url: "../control/scSlide/addImage",
	           	data: 	{
							'cover_book': coverBookAjax,
							'type': $('input[name=media_type]').val()
						},
	           	dataType: "JSON",
	           	success: function( data ) {
	                console.log(data);		                
	           	},
	           	error: function(data){
			        console.log(data);
		      	}
	       	});
	    });
	});
	function tab_radio() {
      	if(document.getElementById("radio_image").checked == true){
        	document.getElementById('upload_file').innerHTML = '<div class="form-group"><label>อัพโหลดรูปภาพ</label><input type="file" name="cover_book" id="cover_book" class="form-control">@if($errors->has('cover_book'))<span class="text-danger"> {{ $errors->first('cover_book') }} </span>@endif</div>';
      	}else{
        	document.getElementById('upload_file').innerHTML = '<div class="form-group"><label>อัพโหลดรูปภาพปกสำหรับวีดีโอ</label><input type="file" name="image_cover" id="image_cover" class="form-control">@if($errors->has('image_cover'))<span class="text-danger"> {{ $errors->first('image_cover') }} </span>@endif</div><div class="form-group"><label>อัพโหลดวีดีโอ</label><input type="file" name="video_content" id="video_content" class="form-control">@if($errors->has('video_content'))<span class="text-danger"> {{ $errors->first('video_content') }} </span>@endif</div>';
      	}
  	}
</script>
@endsection

@section('footer')

<div class="row">
	<div class="col-md-1">
		<a href="#" data-toggle="tooltip" data-placement="top" title="MANAGE SLIDE"><img src="{{ asset('images/menu/video.png') }}" width="40"></a>
	</div>
	<div class="col-md-1">
		<a href="{{ url('control/scMessage') }}" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><img src="{{ asset('images/menu/message.png') }}" width="40" class="imgmenu"></a>
	</div>
	<div class="col-md-1">
		<a href="{{ url('control/scRecommended') }}" data-toggle="tooltip" data-placement="top" title="MANAGE RECOMMENDED BOOK"><img src="{{ asset('images/menu/add_book.png') }}" width="40" class="imgmenu"></a>
	</div>
	<div class="col-md-1">
		<a href="{{ url('control/scSchedule') }}" data-toggle="tooltip" data-placement="top" title="SCHEDULE"><img src="{{ asset('images/menu/schedule.png') }}" width="40" class="imgmenu"></a>
	</div>
</div>

@endsection