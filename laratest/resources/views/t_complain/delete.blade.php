<!DOCTYPE html>
<html>
<head>
	<title>DELETE COMPLAIN</title>
</head>
<body>
<fieldset>
	<h1>DELETE COMPLAIN</h1>
	

	<form method="post">
		@csrf
		<table border="1">
		<tr>
				<td>id</td>
				<td>{{$user['id']}}</td>
			</tr>
		
			<tr>
				<td>complain</td>
				<td>{{$user['complain']}}</td>
			</tr>
			

		
		</table>
		
		<h3>Are you sure?</h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
	<br/>
	<a href="{{route('home.ctacheck')}}">Back</a>
</body>
</html>