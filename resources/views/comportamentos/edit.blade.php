@extends('app')

@section('content')
  <div class="container">
    <h1>Editando Comportamento: {{ $comportamento->nome }}</h1>

    @if ($errors->any())
      <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif

    {!! Form::open(['route' => ["comportamentos.update", $comportamento->id], 'method'=>'put']) !!}
    <div class="form-group">
      {!! Form::label('nome', 'Comportamento:') !!}
      {!! Form::text('nome', $comportamento->nome, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('emoji', 'Emoji:') !!}
      {!! Form::text('emoji', $comportamento->emoji, ['class'=>'form-control']) !!}
    </div>
      <div class="form-group">
        {!! Form::submit('Editar comportamento', ['class'=>'btn btn-primary']) !!}
      </div>
    {!! Form::close() !!}
  </div>
  @endsection
