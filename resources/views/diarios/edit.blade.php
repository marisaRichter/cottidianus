@extends('app')

@section('content')
  <div class="container">
    <h1>Editando Turma: {{ $turma->nome }}</h1>

    @if ($errors->any())
      <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif

    {!! Form::open(['route' => ["turmas.update", $turma->id], 'method'=>'put']) !!}
    <div class="form-group">
      {!! Form::label('nome', 'Nome:') !!}
      {!! Form::text('nome', $turma->nome, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('descricao', 'Descrição:') !!}
      {!! Form::text('descricao', $turma->descricao, ['class'=>'form-control']) !!}
    </div>
      <div class="form-group">
        {!! Form::submit('Editar turma', ['class'=>'btn btn-primary']) !!}
      </div>
    {!! Form::close() !!}
  </div>
  @endsection
