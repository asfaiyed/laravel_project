<!DOCTYPE html>
<html>
<head>
	<title>AVAILABLE PPRODUCTS</title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">

</head>
<body>
		<form>
			<fieldset>
				<legend><h1>AVAILABLE PRODUCTS</h1></legend>
			<table>
			<tr>
			<th>id</th>
			<th>area</th>
			<th>quantity</th>
			<th>price</th>
			<th>product_name</th>
			</tr>
	@for($i=0; $i !=count($userList->results); $i++)		

		<tr>
		    <td>{{ $userList->results[$i]->id }}</td>
			<td>{{ $userList->results[$i]->area }}</td>
			<td>{{ $userList->results[$i]->quantity }}</td>
			<td>{{ $userList->results[$i]->price }}</td>
			<td>{{ $userList->results[$i]->product_name }}</td>
		</tr>
	
	@endfor		
	</table>	<br/>			
		<a href="{{route('home.index')}}">Back</a>		
			</fieldset>
			
		</form>
</body>
</html>
