@extends('app')

@section('content')
  <div class="container">
    <h1>Novo Comportamento</h1>

    @if ($errors->any())
      <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif

    {!! Form::open(['route' => 'comportamentos.store']) !!}
      <div class="form-group">
        {!! Form::label('nome', 'Comportamento:') !!}
        {!! Form::text('nome', null, ['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('emoji', 'Emoji:') !!}
        {!! Form::text('emoji', null, ['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::submit('Criar Comportamento', ['class'=>'btn btn-primary']) !!}
      </div>
    {!! Form::close() !!}
  </div>
  @endsection
