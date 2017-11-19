<h1>NOVO COMPORTAMENTO</h1>

@if ($errors->any())
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif


{!! Form::open(['route' => 'comportamentos.store']) !!}
<div class="form-group">
{!! Form::label('nome', 'Nome:') !!}
{!! Form::text('nome', null) !!}
{!! Form::label('nome', 'Emoji:') !!}
{!! Form::text('emoji', null) !!}
{!! Form::submit('Criar Comportamento') !!}
</div>
{!! Form::close() !!}