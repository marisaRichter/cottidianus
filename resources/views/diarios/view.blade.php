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
            <a href ="{{ route('turmas.view', ['id'=>$turmaID]) }}"class="navbar-brand ti-arrow-left"></a>
            <a class="navbar-brand" href="#">Diários</a>
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
                <div class="left">
                    <h4 class="title">Histórico de {!! $aluno->nome !!}</h4>
                    <p class="category">Diarios para {!! $aluno->nome !!}</p>
                </div>
                <div class="right">
                    <a href="{{ route('diarios.create', ['alunoID'=>$aluno->id, 'turmaID'=>$turmaID]) }}" class="btn btn-fill btn-success">Novo Diário</a>
                </div>
              </div>
              <div class="content table-responsive table-full-width">
                  <table class="table table-striped table-wrapped">
                      <thead>
                        <th class="th-date">Data</th>
                        <th>Anotações</th>
                        <th class="th-date"></th>
                        <th class="th-right">Ações</th>
                      </thead>
                      <tbody>
                        @foreach ($diarios as $diario)
                        <tr>
                          <td class="td-date">{{ $diario->data}}</td>
                          <td style="word-wrap: break-word">{{ $diario->descricao}}</td>
                          <td class="td-date">:)</td>
                          <td><a href="{{ route('diarios.edit', ['id'=>$diario->id]) }}" class="btn btn-sm btn-success">Editar</a>
                          <a href="{{ route('diarios.delete', ['id'=>$diario->id]) }}" class="btn btn-sm btn-danger">Remover</a>
                          </td>
                        </tr>                      
                        @endforeach
                        @if(count($diarios) < 1)
                            <td colspan="4"> {!! $aluno->nome !!} não possui nenhum diário registrado!</td>
                        @endif
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection