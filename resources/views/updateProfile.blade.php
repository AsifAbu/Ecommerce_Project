<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
</head>
<body>
	<form method="post">
		<table border="1" align='center'>
			<tr>
				<td width="30%">
					First Name:
				</td>
				<td width= "30%">
					<input size="30%" type="text" placeholder="Enter First Name" name="rfname" id="rfname" required>
				</td>
				<td id="rfnamep"></td>
			</tr>
			<tr>
				<td width="30%">
					Last Name:
				</td>
				<td width= "30%">
					<input size="30%" type="text" placeholder="Enter Last Name" name="rlname" id="rlname" required>
				</td>
				<td id="rlnamep"></td>
			</tr>
			<tr>
				<td width="30%">
					Phone Number:
				</td>
				<td width= "30%">
					<input size="30%" type="text" placeholder="Enter Phone Number" name="rphonenumber" id="rphonenumber" required>
				</td>
				<td id="rphonenumberp"></td>
			</tr>
			<tr>
				<td width="30%">
					Dath of Birth:
				</td>
				<td width= "30%">
					<input size="30%" type="text" placeholder="Enter Date of Birth" name="rdob" id="rdob" required>
				</td>
				<td id="rdobp"></td>
			</tr>
			<tr>
				<td width="25%">Gender  :</td>
				<td width= "40%">
					<input type="radio" name="rgender" value="male" id="rgender" required>Male
				    <input type="radio" name="rgender" value="female" id="rgender" required>Female
				    <input type="radio" name="rgender" value="other" id="rgender" required>Other
				</td>
				<td id="rgenderp"></td>
			</tr>
			<tr>
				<td width="30%">
					Email:
				</td>
				<td width= "30%">
					<input size="30%" type="text" placeholder="Enter Email" name="remail" id="remail" required>
				</td>
				<td id="remailp"></td>
			</tr>
			<tr>
				<td width="30%">
					Country:
				</td>
				<td width= "30%">
					<input size="30%" type="text" placeholder="Enter Country" name="rcountry" id="rcountry" required>
				</td>
				<td id="rcountryp"></td>
			</tr>
			<tr>
				<td width="30%">
					City:
				</td>
				<td width= "30%">
					<input size="30%" type="text" placeholder="Enter City" name="rcity" id="rcity" required>
				</td>
				<td id="rcityp"></td>
			</tr>
			<tr>
				<td width="30%">
					Location:
				</td>
				<td width= "30%">
					<input size="30%" type="text" placeholder="Enter Location" name="rlocation" id="rlocation" required>
				</td>
				<td id="rlocationp"></td>
			</tr>
			<tr>
				<td width="30%">
					Favourite Food:
				</td>
				<td width= "30%">
					<input size="30%" type="text" placeholder="Enter Favourite Food" name="rfavouritefood" id="rfavouritefood" required>
				</td>
				<td id="rfavouritefoodp"></td>
			</tr>
			<tr>
				<td width="30%">
					Profile Picture:
				</td>
				<td width= "30%">
					<input size="30%" type="file" name="rprofilepicture" id="rprofilepicture" required>
				</td>
				<td id="rprofilepicturep"></td>
			</tr>
			<tr>
				<td width="30%">
					Password:
				</td>
				<td width= "30%">
					<input size="30%" type="text" placeholder="Enter Password" name="rpassword" id="rpassword" required>
				</td>
				<td id="rpasswordp"></td>
			</tr>
			<tr>
				<td width="30%">
					Confirm Password:
				</td>
				<td width= "30%">
					<input size="30%" type="text" placeholder="Enter Confirm Password" name="rconfirmpassword" id="rconfirmpassword" required>
				</td>
				<td id="rconfirmpasswordp"></td>
			</tr>
			<tr>
				<td width="30%">
					Type:
				</td>
				<td width= "30%">
					<input size="30%" type="text" value="user" name="rtype" id="rtype" readonly>
				</td>
				<td id="rtypep"></td>
			</tr>
			<tr>
				<td width="30%">
					Favourite Restaurant:
				</td>
				<td width= "30%">
					<input size="30%" type="text" placeholder="Enter Your Favourite Restaurant" name="rfavouriterestaurant" id="rfavouriterestaurant" required>
				</td>
				<td id="rcityp"></td>
			</tr>
			<tr>
				<td width=25%></td>
				<td align='right'><input type="submit" name="submit" value="Submit" style=" height: 30px; width:50%;"></td>
			</tr>
			<tr>
				<td width=25%></td>
				<td align='right'>
					<a href="login">
				    	<input type="button" name="login" value="back to LOGIN" style=" height: 30px; width:50%;">
				    </a>
				</td>
			</tr>
			

		</table>
	</form>
</body>
</html>
