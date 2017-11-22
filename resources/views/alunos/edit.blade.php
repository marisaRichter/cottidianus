@extends('app')

@section('content')
  <div class="container">
    <h1>Editando Aluno: {{ $aluno->nome }}</h1>

    @if ($errors->any())
      <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif

    {!! Form::open(['route' => ["alunos.update", $aluno->id], 'method'=>'put']) !!}
    <div class="form-group">
      {!! Form::label('nome', 'Nome:') !!}
      {!! Form::text('nome', $aluno->nome, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('aniversario', 'Data de Nascimento:') !!}
      {!! Form::date('aniversario', $aluno->aniversario, ['class'=>'form-control']) !!}
    </div>
      <div class="form-group">
        {!! Form::submit('Editar aluno', ['class'=>'btn btn-primary']) !!}
      </div>
    {!! Form::close() !!}
  </div>
  @endsection
