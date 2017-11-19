<h1>EDITANDO {{$comportamento->nome }}</h1>

@if ($errors->any())
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif


{!! Form::open(['route' => ['comportamentos.update', $comportamento->id] , 'method' => 'put']) !!}
<div class="form-group">
{!! Form::label('nome', 'Nome:') !!}
{!! Form::text('nome', $comportamento->nome) !!}
{!! Form::label('nome', 'Emoji:') !!}
{!! Form::text('emoji', $comportamento->emoji) !!}
{!! Form::submit('Salvar Comportamento') !!}
</div>
{!! Form::close() !!}