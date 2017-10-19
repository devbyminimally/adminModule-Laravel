<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="active"><a href="{{ url('/status') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>

            @if(Session::get('userInfo')['data']['userPermControl'] == 1)
                <li class="header">CONTROL</li>
                <!-- Optionally, you can add icons to the links -->
                @if(Session::get('permControl1')['data']['sc'] == 1)
                    <li><a href="{{ url('control/scSlide') }}"><i class='fa fa-link'></i> <span>SC</span></a></li>
                @endif
                @if(Session::get('permControl1')['data']['sg'] == 1)
                    <li><a href="{{ url('control/sgColor') }}"><i class='fa fa-link'></i> <span>sg</span></a></li>
                @endif
                @if(Session::get('permControl1')['data']['fg'] == 1)
                    <li><a href="#"><i class='fa fa-link'></i> <span>fg</span></a></li>
                @endif
                @if(Session::get('permControl1')['data']['bd'] == 1)
                    <li><a href="#"><i class='fa fa-link'></i> <span>bd</span></a></li>
                @endif
                @if(Session::get('permControl1')['data']['as'] == 1)
                    <li><a href="#"><i class='fa fa-link'></i> <span>as</span></a></li>
                @endif
                @if(Session::get('permControl1')['data']['mc'] == 1)
                    <li><a href="#"><i class='fa fa-link'></i> <span>mc</span></a></li>
                @endif
            @endif

            <li class="header">OTHER</li>
            <!-- Optionally, you can add icons to the links -->

            @if(Session::get('userInfo')['data']['userPermReport'] == 1)
                <li><a href="{{ url('report/sc/basic') }}"><i class='fa fa-link'></i> <span>REPORT</span></a></li>
            @endif
            <li><a href="{{ url('home/manageUser') }}"><i class='fa fa-link'></i> <span>USER</span></a></li>
            <li><a href="{{ url('home/configHardware') }}"><i class='fa fa-link'></i> <span>CONFIG</span></a></li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
