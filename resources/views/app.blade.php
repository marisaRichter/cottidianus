<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Cottidianus - v.0.0.1</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet"/>

    <!-- Default CSS of application -->
    <link href="{{ asset('/css/default.css') }}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('/css/paper-dashboard.css') }}" rel="stylesheet"/>

		<!--  CSS emojis    -->
    <link href="{{ asset('/css/iconselect.css') }}" rel="stylesheet"/>

    <!--  CSS selectize    -->
    <link href="{{ asset('/css/selectize.css') }}" rel="stylesheet"/>
    <!-- CSS datepicker -->
    <link href="{{ asset('/css/classic.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/classic.date.css') }}" rel="stylesheet" />




    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/css/themify-icons.css') }}" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">
    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
            <a href="{{ url('/home')}}" class="simple-text">
                <img src="{{ asset('img/cottidianus-logo.png')}}"/>
            </a>
            </div>
            <?php $route = Illuminate\Support\Facades\Route::getCurrentRoute()->uri();?>
            <ul class="nav">
                <li class="{{ (strripos($route, 'turmas') !== false || strripos($route, 'diarios') !== false || strripos($route, 'home') !== false) ? 'active' : ''}}">
                    <a href="{{ url('/turmas') }}">
                        <i class="ti-view-list-alt"></i>
                        <p>Turmas</p>
                    </a>
                </li>
                <li class="{{ (strripos($route, 'comportamentos') !== false) ? 'active' : ''}}">
                    <a href="{{ url('/comportamentos') }}">
                        <i class="ti-comments-smiley"></i>
                        <p>Comportamentos</p>
                    </a>
                </li>
                <li class="{{ (strripos($route, 'alunos') !== false) ? 'active' : ''}}">
                    <a href="{{ url('/alunos') }}">
                        <i class="ti-user"></i>
                        <p>Estudantes</p>
                    </a>
                </li>
                <li>                    
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="ti-power-off"></i>
                        <p>Logout</p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        @yield('content')

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{ asset('/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{ asset('/js/bootstrap-checkbox-radio.js') }}"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset('/js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('/js/bootstrap-notify.js') }}"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="{{ asset('/js/paper-dashboard.js') }}"></script>

	<!--  JS emojis    -->
	<script src="{{ asset('/js/iconselect.js') }}"></script>

          <!-- js for datepicker -->
    <script src="{{ asset('/js/picker.js') }}"></script>
    <script src="{{ asset('/js/picker.date.js') }}"></script>
    <script src="{{ asset('/js/pt_BR.js') }}"></script>

	<!--  custom    -->
	<script src="{{ asset('/js/custom.js') }}"></script>

      <!-- js for selectize -->
    <script src="{{ asset('/js/selectize.min.js') }}"></script>

</html>
