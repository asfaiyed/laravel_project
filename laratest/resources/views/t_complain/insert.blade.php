<!DOCTYPE html>
<html>
<head>
	<title>INSERT COMPLAIN</title>
</head>
<body>
<fieldset>
	<h1>TYPE HERE TO COMPLAIN</h1>
	

	<form method="post">
		
		{{csrf_field()}}
		<table>

			<tr>
				
				<td><input type="text" name="complain" value="{{old('complain')}}"></td>
				<td></td>
			</tr>

		
			<tr>
				
				<td><input type="submit" name="submit" value="Submit">
				<a href="{{route('home.ctacheck')}}">Check List Here</a></td>
			</tr>
		</table>
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
	<br/>
	<a href="{{route('home.index')}}">Back</a>
	</fieldset>
</body>
</html>