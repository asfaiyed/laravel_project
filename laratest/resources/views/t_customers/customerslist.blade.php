<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			
		
		</tr>

	@foreach($tlist as $users)
		<tr>
			<td>{{$users->id}}</td>
			<td>{{$users->username}}</td>
			<td>{{$users->email}}</td>
		
			
		</tr>
	@endforeach
	</table>
	

</body>
</html>