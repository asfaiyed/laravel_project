<!DOCTYPE html>
<html>
<head>
	<title>CHECK COMPLAIN</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<legend><h1>POSTED COMPLAINS</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
		
			<th>complain</th>
			
			<th>operation</th>
			<th>reply</th>
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			
			<td>{{$users[$i]->complain}}</td>
			
		
			<td>
				
				<a href="{{route('home.ctadelete', [$users[$i]->id])}}">Delete</a>
			</td>
			<td>{{$users[$i]->reply}}</td>
		</tr>
	@endfor
	</table>
	<br/>
	<a href="{{route('home.cta')}}">Back</a> 
<a href="{{route('home.index')}}">Go To Home Page</a>
</fieldset>
</body>
</html>