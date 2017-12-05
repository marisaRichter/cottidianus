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
            <a class="navbar-brand" href="{{url('/alunos')}}">Estudantes</a>
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
                        <h4 class="title">Listar Estudantes</h4>
                        <p class="category">Aqui você encontrará todas os estudantes cadastrados</p>
                    </div>
                    <div class="right">
                        <a href="{{ route('alunos.create') }}" class="btn btn-fill btn-success">Novo Estudante</a>
                    </div>
              </div>
              <div class="content table-responsive table-full-width">
                  <table class="table table-striped">
                      <thead>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th class="th-right">Ações</th>
                      </thead>
                      <tbody>
                      @foreach ($alunos->sortBy('nome') as $aluno)
                      <tr class="{{($aluno->ativo) ? '' : 'tr-deactive'}}">
                        <td>{{ $aluno->nome}}</td>
                        <td>{{ date('d/m/Y', strtotime($aluno->aniversario)) }}</td>
                        <td>
                            @if ($aluno->ativo)
                            <a href="{{ route('alunos.edit', ['id'=>$aluno->id]) }}" class="btn btn-sm btn-success">Editar</a>
                            <a href="{{ route('alunos.deactivate', ['id'=>$aluno->id]) }}" class="btn btn-sm btn-danger">Desativar</a>
                            @else
                            Estudante desativado
                            @endif
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

