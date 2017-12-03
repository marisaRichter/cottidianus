@extends('app')

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="card">
      <div class="header">
          <h4 class="title">Nova Turma</h4>
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
        {!! Form::open(['route' => ["turmas.store"], 'method'=>'post']) !!}
        <div class="form-group">
          {!! Form::label('nome', 'Nome:') !!}
          {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('descricao', 'Descrição:') !!}
          {!! Form::text('descricao', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('alunos', 'Descrição:') !!}
          {!! Form::select('alunos_turmas[]', $alunos, null, ['id'=>'selectize', 'multiple' => true]) !!}
        </div>
          <div class="form-group">
            {!! Form::submit('Nova Turma', ['class'=>'btn btn-primary']) !!}
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  </div>
  @endsection
