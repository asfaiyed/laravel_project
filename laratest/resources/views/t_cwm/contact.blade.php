<!DOCTYPE html>
<html>
<head>
	<title>CONTACT</title>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<legend><h1>CONTACT</h1></legend>
	
	
 
        <input type="text" placeholder="search manager" id="box"><br/><br/>
    
	<div  id="list">
	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			
		
		</tr>

	@foreach($tplist as $users)
		<tr>
			<td>{{$users->id}}</td>
			<td>{{$users->username}}</td>
			<td>{{$users->email}}</td>
		
			
		</tr>
	@endforeach
	</table>
	</div>
	  <script>
        $('#box').keyup(function () {
            $.ajax({
                url: '/c_home/contactmanager',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    key: $(this).val(),
                },
                success: function (data) {
                    $('#list').html(data);
                },
            });
        });
    </script>
	<br/>
<a href="{{route('home.index')}}">Back</a>
</fieldset>
</body>
</html>