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
            <a href ="{{ route('turmas') }}"class="navbar-brand ti-arrow-left"></a>
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
                <div class="left">
                  <h4 class="title">{!! $turma->nome !!}</h4>
                  <p class="category">Aqui estão listados todos os estudantes de {!! $turma->nome !!}</p>
                </div>
                <div class="right">
                    <a href="{{ route('turmas.edit', ['id'=> $turma->id]) }}" class="btn btn-fill btn-success">Adicionar Estudantes</a>
                </div>
              </div>
              <div class="content table-responsive table-full-width">
                  <table class="table table-striped">
                      <thead>
                        <th>Nome</th>
                        <th>Data de Aniversário</th>
                        <th class="th-right">Ações</th>
                      </thead>
                      <tbody>
                        @foreach ($turma->alunos->sortBy('nome') as $aluno)
                        <tr>
                          <td>{{ $aluno->nome}}</td>
                          <td>{{ date('d/m/Y', strtotime($aluno->aniversario))}}</td>
                          <td>                                                        
                            <a href="{{ route('diarios.view', ['turmaID'=>$turma->id, 'alunoID'=>$aluno->id]) }}" class="btn btn-sm btn-success">Ver Diários</a>
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

