<!DOCTYPE html>
<html>
<head>
	<title>DELETE PRODUCT</title>
</head>
<body>
<fieldset>
	<h1>DELETE PRODUCT</h1>
	

	<form method="post">
		@csrf
		<table border="1">
			<tr>
				<td>name</td>
				<td>{{$user['product_name']}}</td>
			</tr>
			<tr>
				<td>file</td>
				<td>{{$user['filename']}}</td>
			</tr>

		
		</table>
		
		<h3>Are you sure?</h3>
		<input type="submit" name="submit" value="Confirm">
	</form>
	<br/>
	<a href="{{route('home.check')}}">Back</a>
</body>
</html>