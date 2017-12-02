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
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../css/animate.min.css" rel="stylesheet"/>

    <!-- Default CSS of application -->
    <link href="../css/default.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="../css/paper-dashboard.css" rel="stylesheet"/>

		<!--  CSS emojis    -->
    <link href="../css/iconselect.css" rel="stylesheet"/>




    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../css/themify-icons.css" rel="stylesheet">

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
                <a href="#" class="simple-text">
                    Cottidianus
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/users') }}">
                        <i class="ti-user"></i>
                        <p>Conta</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/turmas') }}">
                        <i class="ti-view-list-alt"></i>
                        <p>Turma</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/comportamentos') }}">
                        <i class="ti-text"></i>
                        <p>Comportamentos</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/alunos') }}">
                        <i class="ti-pencil-alt2"></i>
                        <p>Estudantes</p>
                    </a>
                </li>
                <li>
                    <a href="logout">
                        <p>Log out</p>
                    </a>
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
    <script src="../js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="../js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../js/bootstrap-notify.js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="../js/paper-dashboard.js"></script>

	<!--  JS emojis    -->
	<script src="../js/iconselect.js"></script>

	<!--  custom    -->
	<script src="../js/custom.js"></script>

</html>
