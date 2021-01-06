<!DOCTYPE html>
<html>
<head>
	<title>RATINGS & REVIEW</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<legend><h1>RATINGS & REVIEW</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>product_name</th>
			<th>review</th>
			<th>ratings</th>
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			<td>{{$users[$i]->product_name}}</td>
			<td>{{$users[$i]->review}}</td>
		    <td>{{$users[$i]->ratings}}</td>
		
		</tr>
	@endfor
	</table>
	<br/>
	
<a href="{{route('home.index')}}">Back</a>
</fieldset>
</body>
</html>