@extends('app')

@section('content')
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
        <a class="navbar-brand" href="#">Turmas</a>
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
          <h4 class="title">Editar Turma: {!! $turma->nome !!}</h4>
          <p class="category">Edite dados da turma</p>
        </div>

      @if ($errors->any())
        <ul class="alert alert-danger">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif
      <div class="content">
        {!! Form::open(['route' => ["turmas.update", $turma->id], 'method'=>'put']) !!}
        <div class="row">
          <div class="form-group col-md-6">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $turma->nome, ['class'=>'form-control border-input']) !!}
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            {!! Form::label('descricao', 'Descrição:') !!}
            {!! Form::text('descricao', $turma->descricao, ['class'=>'form-control border-input']) !!}
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            {!! Form::label('alunos', 'Descrição:') !!}
            {!! Form::select('alunos_turmas[]', $alunos, $turma->alunos->pluck('id'), ['id'=>'selectize', 'class'=>'border-input', 'multiple' => true]) !!}
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            {!! Form::submit('Editar Turma', ['class'=>'btn btn-info btn-fill btn-wd']) !!}
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  </div>
  @endsection
