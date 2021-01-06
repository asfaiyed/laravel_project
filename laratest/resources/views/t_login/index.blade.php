<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<fieldset>
	
	<center><h1>LOGIN</h1></center>
	
	<form method="post">

		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<table>
			<tr>
				<td><b>Username</b></td>
				<td><input type="text" name="username" value="{{old('username')}}"></td>
			</tr>
			<tr>
				<td><b>Password</b></td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit">
				<a href="{{route('registration.index')}}">Registration</a></td>
			</tr>
		</table>
	</form>
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
	{{session('msg')}}
	</fieldset>
</body>
</html>