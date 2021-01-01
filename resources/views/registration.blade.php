<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
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
	<fieldset>
		<legend>Registration</legend>
		<form method="post">
			<table border="0" align='center'>
				<tr>
					<td width="30%" style="background-color: #dddd; color: wblack">
						User Name:
					</td>
					<td width= "30%">
						<input size="30%" type="text" placeholder="Ex: Asif" name="name" id="name" required>
					</td>
					<td id="nameCheck"></td>
				</tr>
				<tr>
					<td width="30%" style="background-color: #dddd;  color: black;">
						Phone Number:
					</td>
					<td width= "30%">
						<input size="30%" type="text" placeholder="01XXXXXXXXX" name="phonenumber" id="phonenumber" required>
					</td>
					<td id="phonenumberCheck"></td>
				</tr>
				<tr>
					<td width="30%" style="background-color: #dddd;  color: black;">
						Email:
					</td>
					<td width= "30%">
						<input size="30%" type="text" placeholder="Ex: example@email.com" name="email" id="email" required>
					</td>
					<td id="emailCheck"></td>
				</tr>
				<tr>
					<td width="30%" style="background-color: #dddd;  color: black;">
						Gender:
					</td>
					<td width= "30%">
						<input type="radio" name="gender" value="male" id="gender" required>Male
						<input type="radio" name="gender" value="female" id="gender" required>Female
						<input type="radio" name="gender" value="other" id="gender" required>Other
					</td>
					<td id="rpasswordp"></td>
				</tr>
				<!--<tr>
					<td width="30%">
						Country:
					</td>
					<td width= "30%">
						<input size="30%" type="text" placeholder="Enter Country" name="rcountry" id="rcountry" required>
					</td>
					<td id="rcountryp"></td>
				</tr>-->
				<tr>
					<td width="30%" style="background-color: #dddd;  color: black;">
						City:
					</td>
					<td width= "30%">
						<input size="30%" type="text" placeholder="Ex: Dhaka" name="city" id="city" required>
					</td>
					<td id="cityCheck"></td>
				</tr>
				<tr>
					<td width="30%" style="background-color: #dddd;  color: black;">
						Location:
					</td>
					<td width= "30%">
						<input size="30%" type="text" placeholder="Ex: Nikunjo" name="location" id="location" required>
					</td>
					<td id="locationCheck"></td>
				</tr>
				
				<tr>
					<td width="30%" style="background-color: #dddd;  color: black;">
						Password:
					</td>
					<td width= "30%">
						<input size="30%" type="text" placeholder="Enter Password" name="password" id="password" required>
					</td>
					<td id="rpasswordp"></td>
				</tr>
				<tr>
					<td width="30%" style="background-color: #dddd;  color: black;">
						Confirm Password:
					</td>
					<td width= "30%">
						<input size="30%" type="text" placeholder="Enter Password Again" name="confirmPassword" id="confirmPassword" onkeyup="machingPassword()" required>
					</td>
					<td id="confirmPasswordCheck"></td>
				</tr>
				
				<tr>
					<td width=25%></td>
					<td align='right'>
						<button type="submit" name="submit" value="submit" style=" height: 30px; width:50%; color: white; background-color: green;">Register</button>
					</td>
				</tr>
				<tr>
					<td width=25%></td>
					<td align='right'>
						already have an account? 
						<a href="login">
							Login
							<!--<input type="button" name="login" value="back to LOGIN" style=" height: 30px; width:50%;">-->
						</a>
					</td>
				</tr>

			</table>
		</form>
	</fieldset>
</body>
</html>
