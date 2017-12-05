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
            <a class="navbar-brand" href="#">Comportamentos</a>
        </div>
    </div>
</nav>

<div class="content">
<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="header">
                    <div class="left">
                        <h4 class="title">Listar Comportamentos</h4>
                        <p class="category">Aqui você encontrará todas os comportamentos cadastrados</p>
                    </div>
                    <div class="right">
                        <a href="{{ route('comportamentos.create') }}" class="btn btn-fill btn-success">Novo Comportamento</a>
                    </div>                  
              </div>
              <div class="content table-responsive table-full-width">
                  <table class="table table-striped">
                      <thead>
                        <th>Nome</th>
                        <th>Emoji</th>
                        <th class="th-right">Ações</th>
                      </thead>
                      <tbody>
                        @foreach ($comportamentos as $comportamento)
                        <tr>
                          <td>{{ $comportamento->nome }}</td>
                          <td><img class="resize-emoji" src="{!! $comportamento->emojis->emoji !!}"></td>
                          <td class="td-right"><a href="{{ route('comportamentos.edit', ['id'=>$comportamento->id]) }}" class="btn btn-info btn-sm">Editar</a>
                          <a href="{{ route('comportamentos.delete', ['id'=>$comportamento->id]) }}" class="btn btn-sm btn-danger">Remover</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
