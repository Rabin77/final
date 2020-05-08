
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<!-- meta link -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- bootstrap link -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- fontawesomelink -->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<!-- java script -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- custome css -->
<link rel="stylesheet" type="text/css" href="CSS/style.css">

<!-- add file -->
<link rel="stylesheet" type="text/css" href="signup.html">

</head>
<body>
  <!-- subnavbar -->
	<nav id="subnavbar" class="navbar navbar-expand-sm  navbar-dark subnavbar" style="background-color: #FFBC6B" >

		<!-- style="background:linear-gradient(rgba(0,0,0,0.4),rgba(80,66,233,0.3)),url(/img/logo.jpg);" -->
    <ul class="navbar-nav mr-auto">
    	 <i class="fa fa-phone"> +977 9867826013 <i class=" ml-2  fa fa-facebook"></i> <i class="ml-3 fa fa-instagram"></i> <i class="ml-3 fa fa-twitter"></i> </i>
    </ul>
    </div>
     <form class="form-inline my-2 my-lg-0 subnavbar">
   <a class="nav-link fa fa-user ml-3 text-dark" href="#"data-target="#mylgin" data-toggle="modal" >Login <span class="sr-only">(current)</span></a>
   <a class="nav-link fa fa-users text-dark" href="#"data-target="#mylogin" data-toggle="modal">SignUp <span class="sr-only">(current)</span></a>
    
    </form>
</nav>
<!-- main navbar -->
<nav class="navbar navbar-expand-sm  navbar-dark" >
 <img src="Img/ll.png"  height="80">
  <button  class="navbar-toggler btn btn-warning" type="button btn-warning" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon btn btn-warning"></span>
  </button>
   <div class="collapse navbar-collapse" id="navbarText">
  <div class="row">
  	<div class="col-md-5">
  		<!-- searchbox -->

  	 <form action="/action_page.php" class="ml-5 ">
      <input type="text" placeholder="Search Ghardailo Product" name="search" class=" text-center srcbox" style="border: 1px solid #FFBC6B">
      <button  class="srcboxbtn" type="submit"><i class="fa fa-search"></i></button>
    </form>
  	<!-- <form class="form-inline my-2 my-lg-0 ml-5 makure" >
  <input class="form-control mr-sm-2 w-100" type="search" placeholder="Search" aria-label="Search" style="border: solid 1px #FFBC6B" > <button type="submit"><i class="fa fa-search"></i></button>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
   
  		
  	</div>
  
  	<div class="col-md-7">
    <ul class="navbar-nav mr-auto mm ml-5">
    		
      <li class="nav-item active">
        <a class="nav-link  text-dark " href="#" >Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-dark " href="service.html" >Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-dark" href="gallery.html">Services </a>
      </li>
        <li class="nav-item">
        <a class="nav-link  text-dark " href="gallery.html"s>About  </a>
      </li>

      <li class="nav-item">
        <a class="nav-link  text-dark " href="about.html">Contact </a>
      </li>
    </ul>
  </div>
  	</div>
  </div>
</nav>
<!-- close navbar section -->

<!-- home first banner carousel section -->

<section class="mt-3 ">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
			<div class=" col-md-12 col-lg-12">
				<img src="img/bbb.jpg" class="">
			</div>
	</div>
    </div>
    <div class="carousel-item">
     <div class="container">
			<div class=" col-md-12 col-sm-12">
				<img src="img/bbb.jpg" class="">
			</div>
	</div>
    </div>
  </div>
  <a class="carousel-control-prev a" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon b" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next a" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon b" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<!-- Second Section Rice Product Section -->
<hr>
<section class="mt-5  ">
	<div class="container">
			<h4>Rice</h4>
	</div>
	<hr>

	<div class="">
		<div class="row">
			<div class="col-sm-12">
				<div id="inam" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					<div class="carousel-item active ">
							<div class="">
								<div class="row">
									<div class="col-sm-4 col-md-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/basmati.jpg" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">Basmiti Primium</h4>
												<p class="text-justify">Rs.2500.|| Meatballs with basmati and tomato sauce 1 porcija</p>
												<button type="button" class="btn btn btn-warning">Buy</button>
                                                <button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>

										<div class="col-sm-4 col-md-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/urja.jpg" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">Urja Primium</h4>
												<p class="text-justify">Rs.2500.|| Meatballs with basmati and tomato sauce 1 porcija</p>
												<button type="button" class="btn btn btn-warning">Buy</button>
                                                <button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>

									<div class="col-sm-4 col-lg-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/777.jpg" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">777 Primium Rice</h4>
												<p class="text-justify">Rs.2500.|| Meatballs with basmati and tomato sauce 1 porcija</p>
												<button type="button" class="btn btn btn-warning">Buy</button>
												<button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-lg-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/gold.jpg" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">Golden Master </h4>
												<p class="text-justify">Rs.2500.|| Meatballs with basmati and tomato sauce 1 porcija</p>
												<button type="button" class="btn btn btn-warning">Buy</button>
												<button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
							<div class="carousel-item ">
							<div class="">
								<div class="row">
									<div class="col-sm-4 col-lg-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/bss.jpg" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">Basmiti Primium</h4>
												<p class="text-justify">Rs.2500.|| Meatballs with basmati and tomato sauce 1 porcija</p>
												<button type="button" class="btn btn btn-warning">Buy</button>
												<button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>

									<div class="col-sm-4 col-lg-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/pat.jpg" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">Patanjali Rice</h4>
												<p class="text-justify">Rs.2500.|| Meatballs with basmati and tomato sauce 1 porcija</p>
												<button type="button" class="btn btn btn-warning">Buy</button>
												<button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>

									<div class="col-sm-4 col-lg-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/l.jpg" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">Ponamani Primium</h4>
												<p class="text-justify">Rs.2500.|| Meatballs with basmati and tomato sauce 1 porcija</p>
												<button type="button" class="btn btn btn-warning">Buy</button>
												<button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>
									<div class="col-sm-4 col-lg-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/;.jpg" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">Basmiti Primium</h4>
												<p class="text-justify">Rs.2500.|| Meatballs with basmati and tomato sauce 1 porcija</p>
												<button type="button" class="btn btn btn-warning">Buy</button>
												<button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
	<a class="carousel-control-prev" href="#inam"  id="pricn"role="button" data-slide="prev">
    <span class="carousel-control-prev-icon pricn" id="pricn" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#inam" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>
</section>

<!-- fruit item section third -->

<section class="mt-5  ">
	<div class="container">
			<h4>Fruit`s</h4>
	</div>
	<hr>

	<div class="">
		<div class="row">
			<div class="col-sm-12">
				<div id="fruit" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					<div class="carousel-item active ">
							<div class="">
								<div class="row">
									<div class="col-sm-4 col-md-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/app.jpg" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">Red Apple</h4>
												<p class="text-justify">Rs.250.|| 1 Kg </p>
												<p class="text-justify">An apple is an edible fruit produced by an apple tree </p>
												<button type="button" class="btn btn btn-warning">Buy</button>
                                                <button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>
									<div class="col-sm-4 col-md-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/app.jpg" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">Red Apple</h4>
												<p class="text-justify">Rs.250.|| 1 Kg </p>
												<p class="text-justify">An apple is an edible fruit produced by an apple tree </p>
												<button type="button" class="btn btn btn-warning">Buy</button>
                                                <button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>

									<div class="col-sm-12 col-lg-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/aamba (3).png" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">Green Guava</h4>
												<p class="text-justify">Rs.400 per Kg  </p>
												<p class="text-justify">An apple is an edible fruit produced by an apple tree </p>
												<button type="button" class="btn btn btn-warning">Buy</button>
												<button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-lg-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/aangur.jpg" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">Green Grapes</h4>
												<p class="text-justify">Rs.400.|| Per Kg: </p>
												<p class="text-justify">An apple is an edible fruit produced by an apple tree </p>
												<button type="button" class="btn btn btn-warning">Buy</button>
												<button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
							<div class="carousel-item ">
							<div class="">
								<div class="row">
									<div class="col-sm-12 col-lg-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/kafal.jpg" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">Kafal</h4>
												<p class="text-justify">An apple is an edible fruit produced by an apple tree </p>
												<button type="button" class="btn btn btn-warning">Buy</button>
												<button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-lg-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/orange.jpg" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">Orange</h4>
												<p class="text-justify">An apple is an edible fruit produced by an apple tree </p>
												<button type="button" class="btn btn btn-warning">Buy</button>
												<button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>
                                    <div class="col-sm-12 col-lg-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/orange.jpg" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">Orange</h4>
												<p class="text-justify">An apple is an edible fruit produced by an apple tree </p>
												<button type="button" class="btn btn btn-warning">Buy</button>
												<button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>

																		<div class="col-sm-12 col-lg-3">
										<div class="" style="width: 300px; margin:auto;">
											<img src="img/kafal.jpg" class="card-img-top">
											<div class="card-body">
												<h4 class="text-center">Kafal</h4>
												<p class="text-justify">An apple is an edible fruit produced by an apple tree </p>
												<button type="button" class="btn btn btn-warning">Buy</button>
												<button type="button" class="btn btn btn-warning pull-right"> Add To Cart</button>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
	<a class="carousel-control-prev a" href="#fruit"  id="pricn"role="button" data-slide="prev">
    <span class="carousel-control-prev-icon pricn b" id="pricn" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next a" href="#fruit" role="button" data-slide="next">
    <span class="carousel-control-next-icon b" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>
</section>

<!-- signup modal -->
	<div class="modal fade" id="mylogin">
	<div class="modal-dialog  modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Register</h3>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div>
				<div class="container" style="font-family: 'Oswald', sans-serif;">
					<form>
					<div class="form-group">
						<label> <i class="fa fa-envelope fa-2x mr-2"></i>Email</label>
						<input type="text" name="Username" class="form-control" required="">
					</div>
					<div class="form-group">
						<label> <i class="fa fa-lock fa-2x mr-2"></i>Password</label>
						<input type="Password" name="Password" class="form-control" required="">
					</div>

					<div class="form-group">
						<label> <i class="fa fa-phone fa-2x mr-2"></i>Phone</label>
						<input type="text" name="Phone" class="form-control" required="">
					</div>
				</form>
				</div>
				<div class="modal-footer justify-content-center">
					<button class="btn btn-danger " data-dismiss ="modal">SignUp</button>
					
				</div>
			</div>
		</div>
		
	</div>
	
</div>

<!-- login modal -->
	<div class="modal fade" id="mylgin">
	<div class="modal-dialog  modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Login</h3>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div>
				<div class="container" style="font-family: 'Oswald', sans-serif;">
					<form method="POST" action="index.php">
					<div class="form-group">
						<label> <i class="fa fa-envelope fa-2x mr-2"></i>Email</label>
						<input type="text" name="username" id="username" class="form-control" required=""style="border-radius: 30px;">
					</div>
					<div class="form-group">
						<label> <i class="fa fa-lock fa-2x mr-2"></i>Password</label>
						<input type="Password"  name="password" class="form-control" required="" style="border-radius: 30px;">
					</div>
					
				</form>
				</div>
				<div class="modal-footer justify-content-center">
					<button class="btn btn-danger " data-dismiss ="modal">Login</button>
					
				</div>
			</div>
		</div>
		
	</div>
	
</div>
</body>
</html>

<?php
$conn= mysqli_connect("localhost","root", "","role");
if (isset($_POST['submit'])) {
	$query=mysqli_query($conn,"select * from lgn where username='".$_POST['username']."' and password ='".$_POST['password'].
		"' ");
	if (mysqli_num_rows($query)>0) {
		$SESSION ['username']=$_POST['username'];
		header('location:demo.php');
		# code...
	}else{
		echo "fuck";

	}
}
 ?>