<!DOCTYPE html>
<html>
<head>
	<title>UPDATE PROFILE</title>
</head>
<body>
<fieldset>
	<h1>UPDATE PROFILE</h1>

	
	<form method="post">
		
		{{csrf_field()}}
		<table>
			<tr>
				<td>Userame</td>
				<td><input type="text" name="username" value="{{$user['username']}}"></td>
			</tr>

			

			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{$user['password']}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="{{$user['email']}}"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender" value="{{$user['gender']}}"></td>
			</tr>
			<tr>
				<td>Education</td>
				<td><input type="text" name="education" value="{{$user['education']}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update"></td>
			</tr>
		</table>
	</form>
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
	<br/>
	<a href="{{route('home.tprofile')}}">Back</a>
	</fieldset>
</body>
</html>