<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Purchased History</title>

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Construction Html5 Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Constra HTML Template v1.0">

	<!-- Themefisher Icon font -->
	<link rel="stylesheet" href="{{ asset ('plugins/themefisher-font/style.css')}}">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="{{asset ('plugins/bootstrap/css/bootstrap.min.css')}}">

	<!-- Animate css -->
	<link rel="stylesheet" href="{{asset ('plugins/animate/animate.css')}}">

	<!-- Slick Carousel -->
	<link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
	<link rel="stylesheet" href="{{asset ('plugins/slick/slick-theme.css')}}">

	<!-- Main Stylesheet -->
	<link href="{{ asset('A.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
</head>

<body id="top">
	<div class="container1">
		<div class="logo">
			<img src="logo.png" alt="" width="195" />
		</div>
		<div class="navbar">
			<a href="home.html"></a>
			<div class="dropdown1">
				<button class="dropbtn" onclick="myFunction()">WELCOME
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown1-content" id="myDropdown">
					<a href="cus_profile">Profile</a>
					<a href="logout">Logout</a>

				</div>
			</div>

			<div class="dropdown1">
				<button class="dropbtn" onclick="myFunction2()">HISTORY
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown1-content" id="myDropdown2">
					<a href="cus_shop">Shop</a>
					<a href="cus_cart">Cart</a>
					<a href="cus_order">Order Details</a>
					<a href="cus_history">Purchased History</a>

				</div>
			</div>
		</div>

		<section class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="content">
							<h1 class="page-name">Purchased History</h1>
							<ol class="breadcrumb">
								<li><a href="home">Home</a></li>
								<li class="active">My Purchased History</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="user-dashboard page-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="dashboard-wrapper user-dashboard">
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>

											<th>Order ID</th>
											<th>Date</th>
											<th>Quantity</th>
											<th>Product Name</th>
											<th>Price</th>
											<th>Total Price</th>
										</tr>
									</thead>
									<tbody>
										<!-- <tr>
											<td>1</td>
											<td>2022/1/2022</td>
											<td>1 </td>
											<td>RM 14 </td>
											<td>RM 120</td>
										</tr> -->
										
										<tr>
											@foreach ($order as $orders)
											<td>{{ $orders->id }}</td>
											<td>{{ $orders->created_at}}</td>
											@endforeach

											@php $total = 0; @endphp

											

											@foreach ($cart as $carts)
											<td>{{ $carts->product_name}}</td>
											<td>{{ $carts->quantity}}</td>
											<td>{{ $carts->price}}</td>
											@php $total += ((int)$carts->price) * ((int)$carts->quantity); @endphp
											@endforeach
											<td>RM {{$total}} </td>
											
											
											
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer class="footer section text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="social-media">
							<li>
								<a href="https://www.facebook.com/themefisher">
									<i class="tf-ion-social-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/themefisher">
									<i class="tf-ion-social-instagram"></i>
								</a>
							</li>
							<li>
								<a href="https://www.twitter.com/themefisher">
									<i class="tf-ion-social-twitter"></i>
								</a>
							</li>
							<li>
								<a href="https://www.pinterest.com/themefisher/">
									<i class="tf-ion-social-pinterest"></i>
								</a>
							</li>
						</ul>
						<ul class="footer-menu text-uppercase">
							<li>
								<a href="contact">CONTACT</a>
							</li>
							<li>
								<a href="shop">SHOP</a>
							</li>

							<li>
								<a href="contact">PRIVACY POLICY</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
	</div>
	</footer>
	<!-- 
    Essential Scripts
    =====================================-->

	<!-- Main jQuery -->
	<script src="plugins/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.1 -->
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Bootstrap Touchpin -->
	<script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
	<!-- Instagram Feed Js -->
	<script src="plugins/instafeed/instafeed.min.js"></script>
	<!-- Video Lightbox Plugin -->
	<script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
	<!-- Count Down Js -->
	<script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

	<!-- slick Carousel -->
	<script src="plugins/slick/slick.min.js"></script>
	<script src="plugins/slick/slick-animation.min.js"></script>

	<!-- Google Mapl -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
	<script type="text/javascript" src="plugins/google-map/gmap.js"></script>

	<!-- Main Js File -->
	<script src="js/script.js"></script>

	<script>
		/* When the user clicks on the button, 
		toggle between hiding and showing the dropdown content */
		function myFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

		function myFunction2() {
			document.getElementById("myDropdown2").classList.toggle("show");
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function(e) {
			if (!e.target.matches('.dropbtn')) {
				var myDropdown = document.getElementById("myDropdown");
				if (myDropdown.classList.contains('show')) {
					myDropdown.classList.remove('show');
				}
			}
		}

		window.onclick = function(e) {
			if (!e.target.matches('.dropbtn')) {
				var myDropdown = document.getElementById("myDropdown2");
				if (myDropdown.classList.contains('show')) {
					myDropdown.classList.remove('show');
				}
			}
		}
	</script>

</body>

</html>