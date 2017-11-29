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
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-panel"></i>
        <p>Stats</p>
                    </a>
                </li>
                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="ti-bell"></i>
                            <p class="notification">5</p>
          <p>Notifications</p>
          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Notification 1</a></li>
                        <li><a href="#">Notification 2</a></li>
                        <li><a href="#">Notification 3</a></li>
                        <li><a href="#">Notification 4</a></li>
                        <li><a href="#">Another notification</a></li>
                      </ul>
                </li>
    <li>
                    <a href="#">
        <i class="ti-settings"></i>
        <p>Settings</p>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<div class="content">
<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="header">
                  <h4 class="title">Listar Turmas</h4>
                  <p class="category">Aqui você encontrará todas as turmas cadastradas</p>
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
                          <td><a href="{{ route('turmas.view', ['id'=>$turma->id]) }}">{{ $turma->nome}}</a></td>
                          <td>{{ $turma->descricao}}</td>
                          <td class="td-right"><a href="{{ route('turmas.edit', ['id'=>$turma->id]) }}" class="btn btn-info btn-sm">Editar</a>
                          <a href="{{ route('turmas.delete', ['id'=>$turma->id]) }}" class="btn btn-sm btn-danger">Remover</a>
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
