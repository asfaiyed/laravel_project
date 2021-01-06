<!DOCTYPE html>
<html>
<head>
	<title>SELL PRODUCT</title>
</head>
<body>
<fieldset>
	<h1>SELL PRODUCT</h1>
	

	<form method="post" enctype="multipart/form-data">
		
		{{csrf_field()}}
		<table>
		<tr><td>Product Name</td>
            <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>
	<tr>
				<td>File</td>
				<td><input type="file" name="myfile"></td>
			</tr>
		
				
				<td><input type="submit" name="submit" value="Save"></td>
				<td><a href="{{route('home.check')}}">Check</a></td>
			</tr>
		</table>
		
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
	<a href="{{route('home.index')}}">Back</a>
	</fieldset>
</body>
</html>