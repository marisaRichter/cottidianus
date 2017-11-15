<html>
	<head>
		<title>Comportamentos</title>
	</head>
	<body>
		<h1> Listando comportamentos</h1>
		<table>
			<tr>
				<th>Comportamento</th>
				<th>Emoji</th>
			</tr>
			@foreach($comportamentos as $comportamento)
			<tr>
				<td>{{$comportamento->nome}}</td>
				<td>{{$comportamento->emoji}}</td>
			</tr>
			@endforeach
		</table>
	</body>
</html>
