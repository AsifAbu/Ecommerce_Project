<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	@if (session('status'))
	<div class="alert alert-success" role="alert" align="center">
		<script type="text/javascript">
			function tempAlert(msg,duration)
			{
				var el = document.createElement("div");
				el.setAttribute("style","position:absolute;top:0%;right:0%;width:200px;height:40px;background-color:#00ffdd;");
				el.innerHTML = msg;
				setTimeout(function(){
					el.parentNode.removeChild(el);
				},duration);
				document.body.appendChild(el);
			}
			var msg = '{{Session::get('status')}}';
			tempAlert(msg,6000);
		</script>
	</div>
	@elseif(session('failed'))
	<div class="alert alert-danger" role="alert" align="center">
		<script type="text/javascript">
			function tempAlert(msg,duration)
			{
				var el = document.createElement("div");
				el.setAttribute("style","position:absolute;top:0%;right:0%;width:200px;height:40px;background-color:red;");
				el.innerHTML = msg;
				setTimeout(function(){
					el.parentNode.removeChild(el);
				},duration);
				document.body.appendChild(el);
			}
			var msg = '{{Session::get('failed')}}';
			tempAlert(msg,6000);
		</script>
	</div>
	@endif
	<form method="post">
		<table border="1" align="center" width="40%"></br></br></br></br></br></br>
			<tr>
				<td width="30%">
					<i style="color:black;font-size:20px;">User Email:</i>
				</td>
				<td width= "30%">
					<input size="30%" type="text" placeholder="Enter Email" name="email" id="email" required>
				</td>
				<td id="nameCheck"></td>
			</tr>
			<tr>
				<td width="30%">
					<i style="color:black;font-size:20px;">Password : </i>
				</td>
				<td width="30%">
					<input size="30%" type="password" placeholder="Enter Password" name="password" id="password" required>
				</td>
				<td id="passwordCheck"></td>
			</tr>

			<tr>
				<td width=30%></td>
				<td>
					<input type="checkbox" name="rememberme" value="checked">Remember Me
				</td>
			</tr>
			<tr>
				<td width=30%>
					
				</td>
				<td align="right">
					<b><input type="submit" name="submit" value="Sign In" style=" height: 30px; width:50%; background-color: green;color: white;font-style: bold;font-size:15px;"></b>
					<a href="/registration"><input type="button" name="registration" value="Sign Up" style=" height: 30px; width:50%;"></a>
				</td>
			</tr>
		</form>
	</body>
	</html>


