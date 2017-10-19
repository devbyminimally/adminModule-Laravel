@extends('layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body>
    <div class="panel panel-primary" style="border-radius: 0;height:11%;background:#2e7ed0;" >
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-4 col-lg-4" align="left">
                    <img src="images/logo.png" width="50px">
                </div>
                <div class="col-xs-4 col-lg-4" align="center">
                </div>
                <div class="col-xs-4 col-lg-4" align="right">
                    <a href="{{ URL::to('change/th') }}"><img src="images/flag_th.png" width="30px"></a>
                    <a href="{{ URL::to('change/en') }}"><img src="images/flag_en.png" width="30px"></a>
                </div>
            </div>
        </div>
    </div>

    <div style="width: 450px; margin: 10% auto;">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="panel panel-primary" style="border-radius: 0;">
            <div class="panel-body">
                <p class="lead text-center" style="margin:5% auto;">{{ trans('login.headerLogin') }}</p>
                <hr>
                <form action="{{ url('/login') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="{{ trans('login.username') }}" name="username" id="username" autofocus="true" />
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="{{ trans('login.password') }}" name="password" id="password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-sm-offset-7 col-sm-5" style="margin-bottom: 2%;">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('login.signin') }}</button>
                        </div><!-- /.col -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('layouts.partials.scripts_auth')
</body>

@endsection
