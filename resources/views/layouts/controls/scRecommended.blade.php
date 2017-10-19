@extends('layouts.app')

@section('htmlheader_title')
RECOMMENDED BOOK
@endsection

@section('header_css')
<link rel="stylesheet" href="{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('/css/imageHover.css') }}">

<style type="text/css">
	.close {
		float: right;
	    font-size: 50px;
	    font-weight: normal;
	    line-height: 1;
	    margin-right: 15px;
	    color: #fff;
	    text-shadow: 0 1px 0 #ffffff;
	    opacity: 1;
	}
	.close:hover {
		color: #fff;
	}
	.modal {
		background: rgba(0, 0, 0, 0.8);
		text-align: center;
  		padding: 0!important;
	}
	.modal:before {
	  	content: '';
	  	display: inline-block;
	  	height: 100%;
	  	vertical-align: middle;
	  	margin-right: -4px;
	}
	.modal-dialog {
	  	display: inline-block;
	  	text-align: left;
	  	vertical-align: middle;
	  	width: fit-content;
	}
</style>
@endsection

@section('contentHeader')
<section class="content-header">
    <h1>MANAGE RECOMMENDED BOOK </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>
@endsection

@section('main-content')
<div class="row">
	<div class="col-md-4">
		<div id="formSearchBook" class="input-group">
		  	<input type="text" name="searchBook" id="searchBook" class="form-control" placeholder="ENTER BOOK CODE">
      		<span class="input-group-btn">
        		<button class="btn btn-primary btn-flat" id="btnSearch" id="btnSearch" type="button">SEARCH</button>
      		</span>
    	</div>
    	<p id="inputValidate" class="text-danger" style="display: none;">plaese, input book id</p>
    	<div class="box box-solid"  id="loadingAjax" style="display: none; margin-top: 10px;">
			<div class="box-body" align="center">
				<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Loading...</span>
			</div>
		</div>
		<div class="box box-warning"  id="errorAddBook" style="display: none; margin-top: 10px;">
			<div class="box-body" align="center">
				<p class="lead"><i class="fa fa-exclamation-triangle fa-lg fa-fw text-warning" aria-hidden="true"></i>ไม่มีทรัพยากรนี้ในห้องสมุด</p>
			</div>
		</div>
		<div class="box box-success"  id="successAddBook" style="display: none; margin-top: 10px;">
			<div class="box-body" align="center">
				<p class="lead"><i class="fa fa-check fa-lg fa-fw text-success" aria-hidden="true"></i>{{ session()->get('status') }}</p>
			</div>
		</div>
		<div class="box box-warning"  id="failAddBook" style="display: none; margin-top: 10px;">
			<div class="box-body" align="center">
				<p class="lead"><i class="fa fa-exclamation-triangle fa-lg fa-fw text-warning" aria-hidden="true"></i>{{ session()->get('statusFail') }}</p>
			</div>
		</div>
		<div class="box box-solid"  id="formAddBook" style="display: none; margin-top: 10px;">
			<div class="box-body">
				<dl>
					<dt>BARCODE</dt>
					<dd id="showBarcode"></dd>
					<dt>NAME</dt>
					<dd id="showName"></dd>
					<dt>COVER BOOK</dt>
					<dd id="showCover"></dd>
					<dt>COVER BOOK</dt>
					<dd><img src="#" id="showCover" width="90" height="120"></dd>
				</dl>
				<form method="post" action="{{ url('/control/scRecommended') }}">
					{{ csrf_field() }}
					<input type="hidden" name="bookID">
					<input type="hidden" name="bookName">
					<input type="hidden" name="bookImg">
					<button type="submit" class="btn btn-primary btn-flat btn-block">ADD RECOMMENDED BOOK</button>
				</form>
				
			</div>
		</div>
		
	</div>
	<div class="col-md-8" id="main-scroll" style="max-height: 600px; overflow-x: auto;">
		@foreach($bookShow as $recBook)
		<div class="col-md-6">
			<div class="box box-solid">
				<div class="box-body">
					<div class="media">
	  					<div class="media-left ">
	  						<p class="hoverEffect pop">
						    	<img class="image" src="{{ config('config.pathCover').$recBook['bookImg'] }}" width="90" height="120">
						           <a class="overlayImg" href="#"><i class="info fa fa-search-plus fa-3x" aria-hidden="true"></i></a>
						    </p>
							<p>
								<form method="get" action="{{ url('/control/scRecommended/delete/'.$recBook['bookID']) }}">
									<button class="btn btn-danger btn-xs btn-flat btn-block" type="submit"><i class="fa fa-trash-o fa-fw"></i> REMOVE</button>
								</form>
							</p>
						</div>
						<div class="media-body">
							<p class="lead media-heading"><b>{{ $recBook['bookName'] }}</b></p>
							<p><b>BOOK ID :</b> {{ $recBook['bookID'] }}</p>
							<p><b>CREATED BY :</b> {{ $recBook['userCreate'] }}</p>
							<p><b>DATE CREATED :</b> {{ $recBook['bookUpdate'] }} </p>
											
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		<p id="loading" align="center">
			<img src="{{ asset('images/gif-load.gif') }}" alt="Loading…" />
		</p>
	</div>
</div>
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  	<div class="modal-dialog">
    	<div class="modal-content">              
      		<img src="" class="imagepreview" height="500" >
    	</div>
  	</div>
</div>

@endsection


@section('footer_js')


<script type="text/javascript">
	$(function() {

		$('#btnSearch').on('click', function() {
			searchBookAPI();
		});
		$('#searchBook').keyup(function(e){
		    if(e.keyCode == 13){
		        searchBookAPI();
		    }
		});	

		@if (session()->has('status')) 
			$("#successAddBook").show();
		@endif
		@if (session()->has('statusFail')) 
			$("#failAddBook").show();
		@endif

		function searchBookAPI(){
			var txtSearchBook = $("input[name=searchBook]").val();
			if(txtSearchBook.length == 0){
				$("#formSearchBook" ).addClass( "has-error" );
				$("#inputValidate").show();
			}else{
				$("#inputValidate").hide();
				var requestAjax = $.ajax({
			        url: "scRecommended/searchBook/"+txtSearchBook,
			        type: 'get',
			        beforeSend: function() {
		               $("#loadingAjax").show();
		               $("#formAddBook").hide();
		               $("#errorAddBook").hide();
		               $("#successAddBook").hide();
		               $("#failAddBook").hide();
		               $("#inputValidate").hide();
		            },
			        success: function( data ){
			            console.log(data);
			            $("#loadingAjax").hide();
			            if(data['result']['error'] == 0){
							$("#formAddBook").show();
				            $("#showBarcode").html(data['result']['barcode']);
				            $("#showName").html(data['result']['media_name']);
				            $("#showCover").html(data['result']['re_image']);
				            $("#showCover img").attr('src',"{{ config('config.pathCover') }}"+data['result']['re_image']);
				            $("input[name=bookID]").val(data['result']['barcode']);
				            $("input[name=bookName]").val(data['result']['media_name']);
				            $("input[name=bookImg]").val(data['result']['re_image']);
			            }else{
			            	$("#errorAddBook").show();
			            }
			        },
			        error: function( data ){

			        }
			    });
			}
			
		}
		$('.pop').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imagemodal').modal('show');   
		});
		
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
		<a href="#" data-toggle="tooltip" data-placement="top" title="MANAGE RECOMMENDED BOOK"><img src="{{ asset('images/menu/add_book.png') }}" width="40"></a>
	</div>
	<div class="col-md-1">
		<a href="{{ url('control/scSchedule') }}" data-toggle="tooltip" data-placement="top" title="SCHEDULE"><img src="{{ asset('images/menu/schedule.png') }}" class="imgmenu" width="40"></a>
	</div>
</div>

@endsection