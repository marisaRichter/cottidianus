@extends ('app')

@section('content')
  <div class='container'>
    <h1 class='left'>Diarios</h1>
    <div class="right btn_new"><a href="{{ route('diarios.create') }}" class="btn-sm btn-info">Nova</a></div>
    <table class='table table-striped table-bordered table-hover'>
      <thead align='center'>
        <td rowspan="2">Nome</td>
        <td rowspan="2">Descrição</td>
        <td rowspan="2" colspan="2">Ações</td>
      </thead>
      <tbody align='center'>
      @foreach ($diarios as $diario)
        <tr>
          <td><a href="{{ route('diarios.view', ['id'=>$diario->id]) }}" class="btn-sm btn-success">{{ $diario->nome}}</a></td>
          <td>{{ $diario->descricao}}</td>
          <td><a href="{{ route('diarios.edit', ['id'=>$diario->id]) }}" class="btn-sm btn-success">Editar</a></td>
          <td><a href="{{ route('diarios.delete', ['id'=>$diario->id]) }}" class="btn-sm btn-danger">Remover</a>
          </td>
        </tr>
       
      @endforeach
      </tbody>
    </table>
  </div>
@endsection
