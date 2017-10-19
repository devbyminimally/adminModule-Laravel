@extends('layouts.app')

@section('contentHeader')
<section class="content-header">
    <h1>HOME<small>home</small></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">
						<pre>{!! print_r( Session::get('permControl1') ) !!}</pre>
						<pre>{!! print_r( Session::get('permReport1') ) !!}</pre>
						<pre>{!! print_r( Session::get('userInfo') ) !!}</pre>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
