@extends('app')

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="card">
      <div class="header">
          <h4 class="title">{!! $turma->nome !!}</h4>
          <p class="category">Edite {!! $turma->nome !!}</p>
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
        <div class="form-group">
          {!! Form::label('nome', 'Nome:') !!}
          {!! Form::text('nome', $turma->nome, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('descricao', 'Descrição:') !!}
          {!! Form::text('descricao', $turma->descricao, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('alunos', 'Descrição:') !!}
          {!! Form::select('alunos_turmas[]', $alunos, $turma->alunos->pluck('id'), ['id'=>'selectize', 'multiple' => true]) !!}
        </div>
          <div class="form-group">
            {!! Form::submit('Editar turma', ['class'=>'btn btn-primary']) !!}
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  </div>
  @endsection
