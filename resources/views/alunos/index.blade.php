@extends ('app')

@section('content')
  <div class='container'>
    <h1 class='left'>Alunos</h1>
    <div class="right btn_new"><a href="{{ route('alunos.create') }}" class="btn-sm btn-info">Novo</a></div>
    <table class='table table-striped table-bordered table-hover'>
      <thead align='center'>
        <td rowspan="2">Nome</td>
        <td rowspan="2">Data de Nascimento</td>
        <td rowspan="2" colspan="2">Ações</td>
      </thead>
      <tbody align='center'>
      @foreach ($alunos as $aluno)
        <tr>
          <td>{{ $aluno->nome}}</td>
          <td>{{ $aluno->aniversario}}</td>
          <td><a href="{{ route('alunos.edit', ['id'=>$aluno->id]) }}" class="btn-sm btn-success">Editar</a></td>
          <td><a href="{{ route('alunos.delete', ['id'=>$aluno->id]) }}" class="btn-sm btn-danger">Remover</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@endsection
