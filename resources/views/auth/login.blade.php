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




    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/css/themify-icons.css') }}" rel="stylesheet">

</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="{{ url('/home')}}" class="simple-text">
                        <img src="{{ asset('img/cottidianus-logo.png')}}"/>
                    </a>
                </div>
                <ul class="nav nav-login">
                    <li>
                        <a href="{{ url('/login') }}">
                            <i class="ti-lock"></i>
                            <p>Login</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/register') }}">
                            <i class="ti-save"></i>
                            <p>Registre-se</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="col-lg-4 col-md-5 login-card">
                        <div class="card">
                            <div class="content">
                                {!! Form::open(['url' => 'login']) !!}
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    {!! Form::label('email', 'Email:') !!}
                                    {!! Form::email('email', null, ['class'=>'form-control', 'placeholder' => 'nome@email.com']) !!}
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    {!! Form::label('password', 'Senha:') !!}
                                    {!! Form::password('password', ['class'=>'form-control']) !!}
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Entrar', ['class'=>'btn btn-primary']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>