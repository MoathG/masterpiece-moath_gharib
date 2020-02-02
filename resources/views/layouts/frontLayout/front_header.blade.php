<?php use App\Http\Controllers\Controller;
$mainCategories =  Controller::mainCategories();
?>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"> +962 7777 56328</a></li>
								<li><a href="#"> topaz@topaz.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{ asset('/') }}"><img style="width:80px" src="{{ asset('images/frontend_images/home/topaz.jpeg') }}" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Jordan
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">USA</a></li>
									<!-- <li><a href="#">UK</a></li> -->
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Jordanian Dinar
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">US Dollar</a></li>
									<li><a href="#">JD</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"> Account</a></li>
								<!-- <li><a href="#"> Wishlist</a></li> -->
								<!-- <li><a href="checkout.html"> Checkout</a></li> -->
								<li><a href="cart.html"> Card</a></li>
								<li><a href="login.html"> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->