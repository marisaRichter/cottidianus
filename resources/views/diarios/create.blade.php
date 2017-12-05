@extends('app')

@section('content')
<!-- Datepicker core CSS     -->
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
  </div>
</nav>
  <div class="content">
    <div class="container-fluid">
    @include('flash::message')
      <div class="card">
      <div class="header">
          <h4 class="title">Novo Diário</h4>
          <p class="category">Crie o diário dos seus estudantes</p>
        </div>

      @if ($errors->any())
        <ul class="alert alert-danger">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif
      <div class="content">
        {!! Form::open(['route' => ["diarios.store", $aluno->id, $turma->id], 'method'=>'post']) !!}
        <div class="form-group col-md-6">
          {!! Form::label('nome', 'Nome:') !!}
          {!! Form::text('nome', $aluno->nome, ['class'=>'form-control border-input', 'readonly' => true]) !!}
        </div>
        <div class="form-group col-md-6">
          {!! Form::label('turma', 'Turma:') !!}
          {!! Form::text('turma', $turma->nome, ['class'=>'form-control border-input', 'readonly' => true]) !!}
        </div>
        <div class="form-group col-md-6">
          {!! Form::label('data', 'Data:') !!}
          {!! Form::text('data', null, ['class'=>'form-control border-input', 'id' => 'datepicker']) !!}
        </div>
        <div class="form-group col-md-6">
          {!! Form::label('comportamento', 'Comportamento:') !!}
          {!! Form::select('comportamento_id', $comportamentos, null, ['id'=>'selectize', 'class'=>'border-input']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('descricao', 'Descrição:') !!}
          {!! Form::textarea('descricao', null, ['class'=>'form-control border-input']) !!}
        </div>
        <div class="form-group">
          {!! Form::submit('Novo Diário', ['class'=>'btn btn-info btn-fill btn-wd']) !!}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  </div>
  @endsection
