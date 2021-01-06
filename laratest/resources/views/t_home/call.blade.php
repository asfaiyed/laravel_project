<!DOCTYPE html>
<html>

<head>

	<title>VIDEO CALL</title>
	<meta http-equiv="content-type" 	content="text/html; charset=UTF-8"	/> 

</head>

<body>

	<script>
		var vidyoConnector;
		function onVidyoClientLoaded(status)
		{
			console.log("VidyoClient load state - " + status.state);
			if(status.state == "READY")
			{
				VC.CreateVidyoConnector(
				{
					
					viewId:"renderer",
					viewStyle:"VIDYO_CONNECTORVIEWSTYLE_Default",
					remoteParticipants:20,
					logFileFilter:"error",
					logFileName:"",
					userData:""
				
				}).then(function (vc)
						{	
							console.log("SUCCESS !!");
							vidyoConnector = vc;
						}).catch(function (error)
								{	
									//console.error("FAiLED !! + " error);
								});
			
			}
		}
		
		function joincaLL()
		{
			vidyoConnector.Connect(
			{
				host:"prod.vidyo.io",
				token:"cHJvdmlzaW9uAFJhdHVsQGYyN2JiOS52aWR5by5pbwA2Mzc2ODM0Mzc2NAAANmM5OTM4NDkyYmQ4OTEwYzk1YWEwOTA3ZTBkYTE4ZjIxN2NhZGMxNWEyYTJkM2ZiNTBjNGYzNjYyZDRjMWQ4YTgyMWRjMzY3NjlmYTYxZjAxZWEyZTY1ZmRmZjU3YTJl=",
				displayName:"Ratul",
				resourceId:"Ashlark",
				onSuccess: function()
				{
					console.log("HERE YOU GO : ");
				},
				onFailure: function(reason)
				{
					console.error("CONNECTION FAILED");
				},
				onDisconnected: function(reason)
				{
					console.log("DISCONNECTED - " + reason);
				}
			})
		}
	
	</script>
	<script src="https://static.vidyo.io/latest/javascript/VidyoClient/VidyoClient.js?onload=onVidyoClientLoaded" ></script>
	<h3>Press Connect to Join</h3>
	<button onclick="joincaLL()">Connect</button>
	<div id="renderer"></div>
	<br/><a href="{{route('home.index')}}">Back</a>
</body>

</html>
