@extends ('app')

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
            <a href ="{{ url('/comportamentos') }}"class="navbar-brand ti-arrow-left"></a>
            <a class="navbar-brand" href="{{ url('/comportamentos') }}">Comportamentos</a>
        </div>
    </div>
</nav>

<div class="content">
<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="header">
                  <h4 class="title">Listar Comportamentos</h4>
                  <p class="category">Aqui você encontrará todas os comportamentos cadastrados</p>
              </div>
              <div class="content">
                {!! Form::open(['route' => ["comportamentos.update", $comportamento->id], 'method'=>'put']) !!}
                <div class="row">
                  <div class="form-group col-md-6">
                    {!! Form::label('nome', 'Comportamento:') !!}
                    {!! Form::text('nome', $comportamento->nome, ['class'=>'form-control border-input']) !!}
                  </div>
                </div>
                <div class="row icon-row">
                  <div class="form-group">
                    <div id="my-icon-select"></div>
                    {!! Form::text('emoji', $comportamento->emoji, ['class'=>'emoji-input', 'hidden']) !!}
                  </div>
                </div>
                <div class="form-group">
                  {!! Form::submit('Editar Comportamento', ['class'=>'btn btn-info btn-fill btn-wd bt-save-emoji']) !!}
                </div>
                {!! Form::close() !!}
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
