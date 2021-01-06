<!DOCTYPE html>
<html>
<head>
	<title>CASH BACK PRODUCTS</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/table.css')}}">
</head>
<body>

	<fieldset>
	<div id="ph">
	<legend><h1>CASH BACK PRODUCTS</h1></legend>

	<table border="1">
		<tr>
			<th>id</th>
			<th>product_name</th>
			<th>day</th>
			<th>quantity</th>
			
		</tr>

	@for($i=0; $i != count($users); $i++)
		<tr>
			<td>{{$users[$i]->id}}</td>
			<td>{{$users[$i]->product_name}}</td>
			<td>{{$users[$i]->day}}</td>
			<td>{{$users[$i]->quantity}}</td>
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