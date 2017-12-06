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
            <a class="navbar-brand" href="#">Turmas</a>
        </div>
    </div>
</nav>

<div class="content">
<div class="container-fluid">
@include('flash::message')
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="header">
                    <div class="left">
                        <h4 class="title">Listar Turmas</h4>
                        <p class="category">Aqui você encontrará todas as turmas cadastradas</p>
                    </div>
                    <div class="right">
                        <a href="{{ route('turmas.create') }}" class="btn btn-fill btn-success">Nova Turma</a>
                    </div>
              </div>
              <div class="content table-responsive table-full-width">
                  <table class="table table-striped">
                      <thead>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th class="th-right">Ações</th>
                      </thead>
                      <tbody>
                        @foreach ($turmas as $turma)
                        <tr>
                          <td>{{ $turma->nome}}</td>
                          <td>{{ $turma->descricao}}</td>
                          <td class="td-right">
                            <a href="{{ route('turmas.view', ['id'=>$turma->id]) }}" class="btn btn-success btn-sm">Visualizar</a>
                            <a href="{{ route('turmas.edit', ['id'=>$turma->id]) }}" class="btn btn-info btn-sm">Editar</a>                          
                          </td>
                        </tr>
                        @endforeach
                        <tr>
                        @if(count($turmas) < 1)
                            <td colspan="4">Você não possui nenhuma turma registrada.</td>
                        @endif
                        </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
