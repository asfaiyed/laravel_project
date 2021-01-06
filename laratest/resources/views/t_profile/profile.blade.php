<!DOCTYPE html>
<html>
<head>
	<title>PROFILE</title>
</head>
<body>

	<fieldset>
	<legend><h1>PROFILE</h1></legend>

	
	
	
	@for($i=0; $i != count($users); $i++)
	<center><img src="/upload/{{$users[$i]->picture}}" width="180px" height="150px"></center>
	
	
	<table>
	
<tr>		
			<td><b>Username: </b></td>
			<td>{{$users[$i]->username}}</td>
			</tr>
			<tr>
			<td><b>Password: </b></td>
			<td>{{$users[$i]->password}}</td>
			</tr>
			<tr>
			<td><b>Email: </b></td>
				<td>{{$users[$i]->email}}</td>
			</tr>
			<tr>
			<td><b>Gender: </b></td>
			<td>{{$users[$i]->gender}}</td>
			</tr>
			<tr>
			<td><b>Education: </b></td>
			<td>{{$users[$i]->education}}</td>
			</tr>
		

	</table>
	<br/>
	<a href="{{route('home.index')}}">Back</a>
	<a href="{{route('home.pedit', [$users[$i]->id])}}">Update</a>
	@endfor
</fieldset>
</body>
</html>