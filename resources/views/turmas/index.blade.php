@extends ('app')

@section('content')
  <div class='container'>
    <h1 class='left'>Turmas</h1>
    <div class="right btn_new"><a href="{{ route('turmas.create') }}" class="btn-sm btn-info">Nova</a></div>
    <table class='table table-striped table-bordered table-hover'>
      <thead align='center'>
        <td rowspan="2">Nome</td>
        <td rowspan="2">Descrição</td>
        <td rowspan="2" colspan="2">Ações</td>
      </thead>
      <tbody align='center'>
      @foreach ($turmas as $turma)
        <tr>
          <td><a href="{{ route('turmas.view', ['id'=>$turma->id]) }}" class="btn-sm btn-success">{{ $turma->nome}}</a></td>
          <td>{{ $turma->descricao}}</td>
          <td><a href="{{ route('turmas.edit', ['id'=>$turma->id]) }}" class="btn-sm btn-success">Editar</a></td>
          <td><a href="{{ route('turmas.delete', ['id'=>$turma->id]) }}" class="btn-sm btn-danger">Remover</a>
          </td>
        </tr>
       
      @endforeach
      </tbody>
    </table>
  </div>
@endsection