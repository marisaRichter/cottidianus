@extends ('app')

@section('content')
<div class='container'>
	<h1 class='left'>Comportamentos</h1>
	<div class="right btn_new"><a href="{{ route('comportamentos.create') }}" class="btn-sm btn-info">Novo</a></div>
	<table class='table table-striped table-bordered table-hover'>
		<thead align='center'>
			<td rowspan="2">Comportamento</td>
			<td rowspan="2">Emoji</td>
			<td rowspan="2" colspan="2">Ações</td>
		</thead>
		<tbody align='center'>
		@foreach ($comportamentos as $comportamento)
			<tr>
				<td>{{ $comportamento->nome}}</td>
				<td>{{ $comportamento->emoji}}</td>
				<td><a href="{{ route('comportamentos.edit', ['id'=>$comportamento->id]) }}" class="btn-sm btn-success">Editar</a></td>
				<td><a href="{{ route('comportamentos.delete', ['id'=>$comportamento->id]) }}" class="btn-sm btn-danger">Remover</a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection
