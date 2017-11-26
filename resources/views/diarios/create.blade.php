@extends('app')

@section('content')
  <div class="container">
    <h1>Nova diario</h1>

    @if ($errors->any())
      <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
    {!! Form::model('diarios',['route' => ['diarios.store', $turmaID]]) !!}
    <div class="form group">
        {!! Form::date('data') !!}
      </div>
    @php
      foreach($alunos as $aluno) {
    @endphp
    {!! Form::hidden('aluno_id[]', $aluno->id)!!}
    <div class="form-group">
        {!! Form::label('descricao', $aluno->nome) !!}
        {!! Form::text('descricao[]', null, ['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('comportamento', 'Comportamento:') !!}
        {!! Form::select('comportamento[]', $comportamentos, null) !!}
      </div>
    @php
      }
    @endphp
    <div class="form-group">
        {!! Form::submit('Criar Turma', ['class'=>'btn btn-primary']) !!}
      </div>
    {!! Form::close() !!}
  </div>
  @endsection
