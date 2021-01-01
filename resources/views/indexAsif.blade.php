<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/slider.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/topNavBar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/sideNavBar.css">
	<title>Home</title>
	
</head>
<body style="background-color: lightgray !important;">
	<table border="1" width="100%" class="">
		<a href="#">hello laravel</a> |
		<a href="home">home</a> |
		<a href="publicprofile">public profile</a> |
		<a href="ownprofile">own profile</a> |
		<a href="login">login</a> |
		<a href="registration">registration</a>
	</table>
	<hr>
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
	<table border="1" width="100%" class="" align="left" bgcolor="darkgreen">
		<tr>
			<td align="center" width="15%" height="45px">
				<h2>XYZ</h2>
			</td>
			<td width="15%" height="45px">
				
			</td>
			<td align="right" width="50%" height="45px">
				<input type="text" name="globalSearch">
				<a href="{{route('search')}}"><button>Search</button></a>
			</td>
			<a href="{{route('cart')}}"><td align="center" width="5%" height="45px">
				<button>Cart</button>

			</td></a>
			<a href="#"><td align="center" width="5%" height="45px">
				<button>Notification</button>
			</td></a>
			
			@if(session('email') == '')
			<td width="5%" height="45px">
				<a href="{{route('registration')}}"><input type="button" name="signup" value="Sign Up" id="myBtn"></a>
			</td>
			<td width="5%" height="45px"><a href="{{route('login')}}"><input type="button" name="login" value="Login" id="myBtn" ></a></td>
			@else
			<td width="5%" height="45px">
				<a href="{{route('logout')}}"><input type="button" name="logout" value="Logout" id="myBtn" ></a>
			</td>
			<td width="5%" height="45px">
				<a href="{{route('own_profile')}}"><input type="button" name="profile" value="Profile" id="menubar"></a>
			</td>
			@endif
		</tr>
	</table>
	<hr>
	<!--
	<div class="navbar" style="padding-bottom: -100px; height: 60px;">
		<a href="#home">Home</a>
		<div class="dropdown">
			<button class="dropbtn">All Shop&nbsp 
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="#">Electronics</a>
				<a href="#">Gents Fasion</a>
				<a href="#">Ladies Fasion</a>
				<a href="#">Cosmetics</a>
				<a href="#">Jewellery</a>
				<a href="#">Home Appliance</a>
				<a href="#">See All</a>
			</div>
		</div>
		<a href="#news">Deals</a>
		<a href="#news">Champaigns</a>
		<a href="#news">Help</a>
	</div> -->
	<br>
	<section class="mt-5" style="padding-left: 50px !important;">
		<div class="cou-container">
			<div class="row">
				<div class="sidenav">
					<a style="background-color: gray; color: black;">
						Top Category
					</a>		
					<button class="dropdown-btn">Electronics 
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-container">
						<a href="#">Laptop<i class="fa fa-caret-right"></i></a>
						<a href="#">Smart TV & Android TV<i class="fa fa-caret-right"></i></a>
						<a href="#">Speaker<i class="fa fa-caret-right"></i></a>
						<a href="#">Fredge<i class="fa fa-caret-right"></i></a>
						<a href="#">Smart Phone<i class="fa fa-caret-right"></i></a>
						<a href="#">AC<i class="fa fa-caret-right"></i></a>
						<a href="#">Microwave Oven<i class="fa fa-caret-right"></i></a>
						<a href="#">More...<i class="fa fa-caret-right"></i></a>
					</div>
					<button class="dropdown-btn">Cloth 
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-container">
						<a href="#">Gents Collection<i class="fa fa-caret-right"></i></a>
						<a href="#">Ladies Collection<i class="fa fa-caret-right"></i></a>
						<a href="#">Kids Collection<i class="fa fa-caret-right"></i></a>
					</div>
					<button class="dropdown-btn">Vehicle 
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-container">
						<a href="#">Bike<i class="fa fa-caret-right"></i></a>
						<a href="#">Car<i class="fa fa-caret-right"></i></a>
						<a href="#">By Cycle<i class="fa fa-caret-right"></i></a>
						<a href="#">Track<i class="fa fa-caret-right"></i></a>
						<a href="#">More...<i class="fa fa-caret-right"></i></a>
					</div>
					<button class="dropdown-btn">Cosmetics 
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-container">
						<a href="#">Gents Cosmetics<i class="fa fa-caret-right"></i></a>
						<a href="#">Ledies Cosmetic<i class="fa fa-caret-right"></i></a>
						<a href="#">Kids Cosmetic<i class="fa fa-caret-right"></i></a>
					</div>
					<button class="dropdown-btn">Jewellery 
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-container">
						<a href="#">Gents<i class="fa fa-caret-right"></i></a>
						<a href="#">Ledies<i class="fa fa-caret-right"></i></a>
					</div>
					<button class="dropdown-btn">Decoraion 
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-container">
						<a href="#">Decoration<i class="fa fa-caret-right"></i></a>
						<a href="#">More...<i class="fa fa-caret-right"></i></a>
					</div>
					<button class="dropdown-btn">Furniture 
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-container">
						<a href="#">Bed<i class="fa fa-caret-right"></i></a>
						<a href="#">Sofa<i class="fa fa-caret-right"></i></a>
						<a href="#">Dining Table<i class="fa fa-caret-right"></i></a>
						<a href="#">Reading Table<i class="fa fa-caret-right"></i></a>
						<a href="#">Show Case<i class="fa fa-caret-right"></i></a>
						<a href="#">Chair<i class="fa fa-caret-right"></i></a>
						<a href="#">Ware Drove<i class="fa fa-caret-right"></i></a>
						<a href="#">More...<i class="fa fa-caret-right"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-8 col-12">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner" style="height: 310px; width: 970px;">
							<div class="carousel-item active">
								<img src="../assets/img/demo 6.jpg"  alt="First slide" style="max-height: 100%; max-width: 100%; height: 310px; width: 970px;">
							</div>
							<div class="carousel-item">
								<img src="../assets/img/demo 4.jpg" alt="Second slide" style="max-height: 100%; max-width: 100%; height: 310px; width: 970px;">
							</div>
							<div class="carousel-item">
								<img src="../assets/img/demo 5.jpg" alt="Third slide" style="max-height: 100%; max-width: 100%; height: 310px; width: 970px;">
							</div>
							<div class="carousel-item">
								<img src="../assets/img/demo 8.jpg" alt="Fourth slide" style="max-height: 100%; max-width: 100%; height: 310px; width: 970px;">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
						data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
							data-slide="next" style="align-content: left;">
							<span class="carousel-control-next-icon" aria-hidden="true" style="align-content: left;"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<hr width="90%" style="border-color: darkgray;">
<table border="0" width="90%" align="center" style="padding-left: 20px;">
	<tr align="center">
		<td align="left" width="70%" class="heighttopbar">
			<h2 style="color: black;">Treanding Items</h2>
		</td>
		<td width="20%">
			  <input type="text" name="searchItemName" placeholder="Search Item" onkeyup="">
		</td>
		<td width="10%">
			  <button style="background-color: skyblue;">View All</button>
		</td>
	</tr>
</table>
<table border="0" width="90%" align="center">
	<tr>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
	</tr>

</table>

<hr width="90%" style="border-color: darkgray;">
<table border="0" width="90%" align="center" style="padding-left: 20px;">
	<tr align="center">
		<td align="left" width="70%" class="heighttopbar">
			<h2 style="color: black;">Shop by Brand</h2>
		</td>
		<td width="20%">
			  <input type="text" name="searchItemName" placeholder="Search Item" onkeyup="">
		</td>
		<td width="10%">
			  <button style="background-color: skyblue;">View All</button>
		</td>
	</tr>
</table>
<table border="0" width="90%" align="center">
	<tr>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Brand Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Brand Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Brand Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Brand Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Brand Name</b></h6>
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Brand Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Brand Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Brand Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Brand Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Brand Name</b></h6>
				</div>
			</div>
		</td>
	</tr>

</table>

<hr width="90%" style="border-color: darkgray;">
<table border="0" width="90%" align="center" style="padding-left: 20px;">
	<tr align="center">
		<td align="left" width="70%" class="heighttopbar">
			<h2 style="color: black;">Shop by Store</h2>
		</td>
		<td width="20%">
			  <input type="text" name="searchItemName" placeholder="Search Item" onkeyup="">
		</td>
		<td width="10%">
			  <button style="background-color: skyblue;">View All</button>
		</td>
	</tr>
</table>
<table border="0" width="90%" align="center">
	<tr>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Store Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Store Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Store Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Store Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Store Name</b></h6>
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Store Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Store Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Store Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Store Name</b></h6>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Store Name</b></h6>
				</div>
			</div>
		</td>
	</tr>

</table>

<hr width="90%" style="border-color: darkgray;">
<table border="0" width="90%" align="center" style="padding-left: 20px;">
	<tr align="center">
		<td align="left" width="70%" class="heighttopbar">
			<h2 style="color: black;">Treanding Items</h2>
		</td>
		<td width="20%">
			  <input type="text" name="searchItemName" placeholder="Search Item" onkeyup="">
		</td>
		<td width="10%">
			  <button style="background-color: skyblue;">View All</button>
		</td>
	</tr>
</table>
<table border="0" width="90%" align="center">
	<tr>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
		<td>
			<div style="background-color: white; height: 100%;">
				<div style="height: 70%; padding-bottom: 5px; padding-top: 5px; align-content: center;">
					<img src="../assets/img/download.jpg" style="height: 150px; width: 220px; padding-left: 20px;">

				</div>
				<div style="height: 30%; text-align: center;">
					<h6><b>Item Name</b></h6>
					<p>price $150</p>
				</div>
			</div>
		</td>
	</tr>

</table>
@include('footer')



<script src="../assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>
<script>
	/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

	for (i = 0; i < dropdown.length; i++) {
		dropdown[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var dropdownContent = this.nextElementSibling;
			if (dropdownContent.style.display === "block") {
				dropdownContent.style.display = "none";
			} else {
				dropdownContent.style.display = "block";
			}
		});
	}

</script>
