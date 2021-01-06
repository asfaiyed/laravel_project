<!DOCTYPE html>
<html>
<head>
	<title>OTHER PRODUCTS</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<div id="ph">
	<legend><h1>OTHER PRODUCTS</h1></legend>

	<table border="1">
		<tr>
			<th>Name</th>
			<th>Products</th>
			<th>Price</th>
			
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			
			<td>{{$users[$i]->name}}</td>
			<td>{{$users[$i]->product_name}}</td>
			<td>{{$users[$i]->price}}</td>
			
		</tr>
	@endfor
	</table>
	</div>
	<br/>
<a href="javascript:pdfToHTML()">Save as PDF</a><br/><br/>
<a href="{{route('home.index')}}">Back</a>
</fieldset>
</body>
<script src="/js/jquery-2.1.3.js"></script>
<script src="/js/pdfFromHTML.js"></script>
<script src="/js/jspdf.js"></script>
</html>