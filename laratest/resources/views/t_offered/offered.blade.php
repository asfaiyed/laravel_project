<!DOCTYPE html>
<html>
<head>
	<title>OFFERED PRODUCTS</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<legend><h1>OFFERED PRODUCTS</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>quantity</th>
			<th>product_name</th>
			<th>price</th>
			
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			<td>{{$users[$i]->quantity}}</td>
			<td>{{$users[$i]->product_name}}</td>
			<td>{{$users[$i]->price}}</td>
		</tr>
	@endfor
	</table>
	<br/>
<a href="{{route('home.index')}}">Back</a>
</fieldset>
</body>
</html>