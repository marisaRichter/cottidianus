@extends('app')

@section('content')
<link href="{{ asset('/css/classic.css') }}" rel="stylesheet" />
<link href="{{ asset('/css/classic.date.css') }}" rel="stylesheet" />
<nav class="navbar navbar-default">
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar bar1"></span>
            <span class="icon-bar bar2"></span>
            <span class="icon-bar bar3"></span>
        </button>
        <a href ="{{ route('turmas') }}"class="navbar-brand ti-arrow-left"></a>
        <a class="navbar-brand" href="#">Diários</a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="ti-panel"></i>
    <p>Stats</p>
                </a>
            </li>
            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-bell"></i>
                        <p class="notification">5</p>
      <p>Notifications</p>
      <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Notification 1</a></li>
                    <li><a href="#">Notification 2</a></li>
                    <li><a href="#">Notification 3</a></li>
                    <li><a href="#">Notification 4</a></li>
                    <li><a href="#">Another notification</a></li>
                  </ul>
            </li>
<li>
                <a href="#">
    <i class="ti-settings"></i>
    <p>Settings</p>
                </a>
            </li>
        </ul>

    </div>
</div>
</nav>
  <div class="content">
    <div class="container-fluid">
      <div class="card">
      <div class="header">
          <h4 class="title">Novo Estudante</h4>
          <p class="category">Crie sua turma e adicione seus estudantes</p>
        </div>

      @if ($errors->any())
        <ul class="alert alert-danger">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif
      <div class="content">
        {!! Form::open(['route' => 'alunos.store']) !!}
        <div class="row">
          <div class="form-group col-md-6">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control border-input']) !!}
          </div>
          <div class="form-group col-md-6">
            {!! Form::label('aniversario', 'Data de Nascimento:') !!}
            {!! Form::text('aniversario', null, ['class'=>'form-control border-input', 'id' => 'datepicker']) !!}
          </div>
        </div>
        <div class="form-group">
          {!! Form::submit('Novo Estudante', ['class'=>'btn btn-info btn-fill btn-wd']) !!}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  </div>
  @endsection
