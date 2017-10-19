@extends('layouts.app')

@section('htmlheader_title')
STATUS
@endsection

@section('header_css')

<style type="text/css">
	.grid-item--width2 { width: 320px; }
	.grid-item--width3 { width: 480px; }
	.grid-item--width4 { width: 720px; }
</style>
@endsection

@section('contentHeader')
<section class="content-header">
    <h1>STATUS<small>status</small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>
@endsection

@section('main-content')
	<div class="grid">
		@for($x = 0 ; $x < 10 ; $x++)
	            <div class="grid-item grid-item--width2">
					<div class="box box-warning">
		                <div class="box-body box-profile">
		                  	<img class="profile-user-img img-responsive img-circle" src="{{ asset('imgHardware/ss.png') }}" alt="User profile picture">
		                  	<h3 class="profile-username text-center">SST10001</h3>
		                  	<p class="text-muted text-center">STAFF STATION</p>
		                  	<hr>
			                	<strong><i class="fa fa-cog margin-r-5"></i> STATUS</strong>
			                  	<span class="pull-right label label-warning">WARNING</span>
			                  	<li>qwertyuikjhgfdsasdfghmnbvcxsz</li>
			                  	<li>qwertyuikjhgfdsasdfghmnbvcxsz</li>
			                  	<li>qwertyuikjhgfdsasdfghmnbvcxsz</li>
			                <hr>
		                  	<a href="#" class="btn btn-success btn-block"><b>POWER ON / OFF</b></a>
		                </div>
		            </div>
				</div>
				<div class="grid-item grid-item--width2">
					<div class="box box-success">
		                <div class="box-body box-profile">
		                  	<img class="profile-user-img img-responsive img-circle" src="{{ asset('imgHardware/ss.png') }}" alt="User profile picture">
		                  	<h3 class="profile-username text-center">SST10001</h3>
		                  	<p class="text-muted text-center">STAFF STATION</p>
		                  	<hr>
			                	<strong><i class="fa fa-cog margin-r-5"></i> STATUS</strong>
			                  	<span class="pull-right label label-success">ONLINE</span>
			                <hr>
		                  	<a href="#" class="btn btn-success btn-block"><b>POWER ON / OFF</b></a>
		                </div>
		            </div>
				</div>
				<div class="grid-item grid-item--width2">
					<div class="box box-danger">
		                <div class="box-body box-profile">
		                  	<img class="profile-user-img img-responsive img-circle" src="{{ asset('imgHardware/ss.png') }}" alt="User profile picture">
		                  	<h3 class="profile-username text-center">SST10001</h3>
		                  	<p class="text-muted text-center">STAFF STATION</p>
		                  	<hr>
			                	<strong><i class="fa fa-cog margin-r-5"></i> STATUS</strong>
			                  	<span class="pull-right label label-danger">OFFLINE</span>
			                <hr>
		                  	<a href="#" class="btn btn-danger btn-block"><b>POWER ON / OFF</b></a>
		                </div>
		            </div>
				</div>
				<div class="grid-item grid-item--width2">
					<div class="box box-warning">
		                <div class="box-body box-profile">
		                  	<img class="profile-user-img img-responsive img-circle" src="{{ asset('imgHardware/ss.png') }}" alt="User profile picture">
		                  	<h3 class="profile-username text-center">SST10001</h3>
		                  	<p class="text-muted text-center">STAFF STATION</p>
		                  	<hr>
			                	<strong><i class="fa fa-cog margin-r-5"></i> STATUS</strong>
			                  	<span class="pull-right label label-warning">WARNING</span>
			                  	<li>qwertyuikjhgfdsasdfghmnbvcxsz</li>
			                  	<li>qwertyuikjhgfdsasdfghmnbvcxsz</li>
			                  	<li>qwertyuikjhgfdsasdfghmnbvcxsz</li>
			                <hr>
		                  	<a href="#" class="btn btn-success btn-block"><b>POWER ON / OFF</b></a>
		                </div>
		            </div>
				</div>
				<div class="grid-item grid-item--width2">
					<div class="box box-warning">
		                <div class="box-body box-profile">
		                  	<img class="profile-user-img img-responsive img-circle" src="{{ asset('imgHardware/ss.png') }}" alt="User profile picture">
		                  	<h3 class="profile-username text-center">SST10001</h3>
		                  	<p class="text-muted text-center">STAFF STATION</p>
		                  	<hr>
			                	<strong><i class="fa fa-cog margin-r-5"></i> STATUS</strong>
			                  	<span class="pull-right label label-warning">WARNING</span>
			                  	<li>qwertyuikjhgfdsasdfghmnbvcxsz</li>
			                  	<li>qwertyuikjhgfdsasdfghmnbvcxsz</li>
			                  	<li>qwertyuikjhgfdsasdfghmnbvcxsz</li>
			                <hr>
		                  	<a href="#" class="btn btn-success btn-block"><b>POWER ON / OFF</b></a>
		                </div>
		            </div>
				</div>
				<div class="grid-item grid-item--width2">
					<div class="box box-danger">
		                <div class="box-body box-profile">
		                  	<img class="profile-user-img img-responsive img-circle" src="{{ asset('imgHardware/ss.png') }}" alt="User profile picture">
		                  	<h3 class="profile-username text-center">SST10001</h3>
		                  	<p class="text-muted text-center">STAFF STATION</p>
		                  	<hr>
			                	<strong><i class="fa fa-cog margin-r-5"></i> STATUS</strong>
			                  	<span class="pull-right label label-danger">OFFLINE</span>
			                <hr>
		                  	<a href="#" class="btn btn-danger btn-block"><b>POWER ON / OFF</b></a>
		                </div>
		            </div>
				</div>
				<div class="grid-item grid-item--width2">
					<div class="box box-danger">
		                <div class="box-body box-profile">
		                  	<img class="profile-user-img img-responsive img-circle" src="{{ asset('imgHardware/ss.png') }}" alt="User profile picture">
		                  	<h3 class="profile-username text-center">SST10001</h3>
		                  	<p class="text-muted text-center">STAFF STATION</p>
		                  	<hr>
			                	<strong><i class="fa fa-cog margin-r-5"></i> STATUS</strong>
			                  	<span class="pull-right label label-danger">OFFLINE</span>
			                <hr>
		                  	<a href="#" class="btn btn-danger btn-block"><b>POWER ON / OFF</b></a>
		                </div>
		            </div>
				</div>
				<div class="grid-item grid-item--width2">
					<div class="box box-success">
		                <div class="box-body box-profile">
		                  	<img class="profile-user-img img-responsive img-circle" src="{{ asset('imgHardware/ss.png') }}" alt="User profile picture">
		                  	<h3 class="profile-username text-center">SST10001</h3>
		                  	<p class="text-muted text-center">STAFF STATION</p>
		                  	<hr>
			                	<strong><i class="fa fa-cog margin-r-5"></i> STATUS</strong>
			                  	<span class="pull-right label label-success">ONLINE</span>
			                <hr>
		                  	<a href="#" class="btn btn-success btn-block"><b>POWER ON / OFF</b></a>
		                </div>
		            </div>
				</div>
		@endfor
	</div>


@endsection

@section('footer_js')
<script type="text/javascript" src="{{ asset('/plugins/masonry-docs/masonry.pkgd.min.js') }}"></script>
<script type="text/javascript">
	$('.grid').masonry({
	  itemSelector: '.grid-item',
	  columnWidth: 50,
	  gutter: 50,
	  horizontalOrder: true
	});
</script>
@endsection