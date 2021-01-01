<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
</head>
<body>
	<form>
		<?php //dd($myData['name']); ?>
		<fieldset><legend><h3>Profile of, <b style="text-transform:uppercase">{{$myData->name}}</b></h3></legend>
			<table border="0" align='center' width="70%">
				<tr>
					<td width="10%">
						First Name
					</td>
					<td width="5%">:</td>
					<td width= "10%">
						<!-- <input size="10%" type="text" placeholder="Enter First Name" name="rfname" id="rfname" required> -->
						<label style="text-transform:uppercase">{{$myData->name}}</label>
					</td>
					<td width="35%" id="rfnamep"></td>
					<td rowspan="6" width="25%"><img src="{{URL::asset('/')}}images/profile/{{$myData->profile_pic}}" style="width:6em; height:7em;"></td>
				</tr>
				<tr>
					<td width="10%">
						Phone Number
					</td>
					<td width="5%">:</td>
					<td width= "10%">
						<!-- <input size="10%" type="text" placeholder="Enter Phone Number" name="rphonenumber" id="rphonenumber" required> -->
						{{$myData->phone}}
					</td>
					<td width="35%" id="rphonenumberp"></td>
				</tr>
				@if(session('type') != 'merchant')
				<tr>
					<td width="10%">
						Dath of Birth
					</td>
					<td width="5%">:</td>
					<td width= "10%">
						<!-- <input size="10%" type="text" placeholder="Enter Date of Birth" name="rdob" id="rdob" required> -->
						{{$myData->dob}}
					</td>
					<td width="35%" id="rdobp"></td>
				</tr>
				<tr>
					<td width="25%">Gender  </td>
					<td width="5%">:</td>
					<td width= "40%">
						<!-- <input type="text" name="rgender" value="male" id="rgender" required> -->
						{{$myData->gender}}
					</td>
					<td width="35%" id="rgenderp"></td>
				</tr>
				@endif
				<tr>
					<td width="10%">
						Email
					</td>
					<td width="5%">:</td>
					<td width= "10%">
						<!-- <input size="10%" type="text" placeholder="Enter Email" name="remail" id="remail" required> -->
						{{$myData->email}}
					</td>
					<td width="35%" id="remailp"></td>
				</tr>
				<tr>
					<td width="10%">
						City
					</td>
					<td width="5%">:</td>
					<td width= "10%">
						<!-- <input size="10%" type="text" placeholder="Enter Country" name="rcountry" id="rcountry" required> -->
						{{$myData->city}}
					</td>
					<td width="35%" id="rcountryp"></td>
					<td></td>
				</tr>
				<tr>
					<td width="10%">
						Type
					</td>
					<td width="5%">:</td>
					<td width= "10%">
						<!-- <input size="10%" type="text" value="user" name="rtype" id="rtype" readonly> -->
						{{Session::get('type')}}
					</td>
					<td width="35%" id="rtypep"></td>
					<td></td>
				</tr>
				<tr>
					<td width=25%></td>
					<td></td>
					<td align='right'>
						<a href="{{Route('index')}}"><input type="button" name="edit" value="Edit Profile" style=" height 30px; width50%;"></a>
					</td>
				</tr>
				<tr>
					<td width=25%></td>
					<td></td>
					<td align='right'>
						<a href="{{Route('index')}}"><input type="button" name="changepassword" value="Change Password" style=" height 30px; width50%;"></a>
						
					</td>
					<td>
						<a href="{{route('index')}}">
				    		<input type="button" name="home" value="HOME" style=" height: 30px; width:50%;">
				    	</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>