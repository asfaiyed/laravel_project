<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
<fieldset>

	<center/><h1>WELCOME HOME {{session('username')}}</h1><hr>
	

<br/>
<center><a href="{{route('home.tprofile')}}">Profile</a></center><br/>
<center><a href="{{route('home.available')}}">Available Products</a></center><br/>
<center><a href="{{route('home.offered')}}">Offered Products</a></center><br/>
<center><a href="{{route('home.sellproduct')}}">Sell Product</a></center><br/>
<center><a href="{{route('home.cashback')}}">Cash Back Products</a></center><br/>
<center><a href="{{route('home.customersinfo')}}">Customers Information</a></center><br/>
<center><a href="{{route('home.cwm')}}">Contact With Manager</a></center><br/>
<center><a href="{{route('home.cta')}}">Complain to Admin</a></center><br/>
<center><a href="{{route('home.ratings')}}">Ratings & Review</a></center><br/>
<center><a href="{{route('home.other')}}">All Uploaded Products</a></center><br/>
<center><a href="{{route('home.call')}}">Video Call</a></center><br/>
<center><a href="{{route('logout.index')}}">Logout</a></center>
</fieldset>
</body>
</html>