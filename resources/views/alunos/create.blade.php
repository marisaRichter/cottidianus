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
        <a href ="{{ url('/alunos') }}"class="navbar-brand ti-arrow-left"></a>
        <a class="navbar-brand" href="{{url('/alunos')}}">Estudantes</a>
    </div>
</div>
</nav>
  <div class="content">
    <div class="container-fluid">
    @include('flash::message')
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
