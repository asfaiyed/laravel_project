<!DOCTYPE html>
<html>
<head>
	<title>UPLOADED PRODUCTS</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<h1>UPLOADED PRODUCTS</h1>

	<table border="1">
		<tr>
			<th>id</th>
			<th>product_name</th>
			<th>filename</th>
			
			<th>operation</th>
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			<td>{{$users[$i]->product_name}}</td>
			<td><a href="/upload/{{$users[$i]->filename}}">{{$users[$i]->filename}}</a></td>
			
		   
			<td>
				
				<a href="{{route('home.checkdelete', [$users[$i]->id])}}">Delete</a>
			</td>
		</tr>
	@endfor
	</table>
	<br/>
	<a href="{{route('home.sellproduct')}}">Back</a> 
<a href="{{route('home.index')}}">Go To Home Page</a>
</fieldset>
</body>
</html>