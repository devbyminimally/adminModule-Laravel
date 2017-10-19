<head>
    <meta charset="UTF-8">
    <title> @yield('htmlheader_title', 'Your title here') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->    <!-- Theme style -->
    

    <link href="{{ asset('/css/skins/skin-blue-light.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />

    <style type="text/css">
        .imgmenu {
            filter: gray; /* IE6-9 */
            filter: grayscale(1); /* Microsoft Edge and Firefox 35+ */
            -webkit-filter: opacity(0.3); /* Google Chrome, Safari 6+ & Opera 15+ */
          } 
    </style>

    @yield('header_css')

    <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />

</head>
