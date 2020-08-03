<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nuno - Responsive Bootstrap Theme</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="row" data-spy="croll" data-target="#navbarResponsive">
<div class="col-sm-2">
</div>
<div class="col-sm-8 p-0">
	<div id="Home">
<!-- Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="#Home">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#Forum">Forum</a>
			</li>	
			<li class="nav-item">
				<a class="nav-link" href="#Ranking">Ranking</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#OnGoing">On OnGoing</a>
			</li>	
			<li class="nav-item">
				<a class="nav-link" href="#Completed">Completed</a>
			</li>		
		</ul>
		 <form class="form-inline">
		    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
 		 </form>
		<span><a class="text-light ml-2"href="#login"><button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">Login
		</button></a>
		</span>
	</div>
</nav>
</div>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      		<?php
				if( isset($_SESSION["thongbao"]) ){
					echo $_SESSION["thongbao"];
					session_destroy();
				}
				?>
      	<!-- Tạo kết nối với trang đăng ký -->
        <form  action="login_submit.php", method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="username" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Login" class="btn float-right login_btn">
						
						
					<!--	<but type="submit" value="Sign up" class="btn float-right mr-2">
						<a href="register1.php"></a></input> -->

						<button class="btn float-right mr-2"><a href="register1.php">Sign up</a></button>
					
					</div>
				</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-light">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Start Image slider -->  
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">			
		</li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1">			
		</li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2">			
		</li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<!-- slide one -->
		<div class="carousel-item active" style="background-image: url(img/computers.png);">
			<div class="carousel-caption text-center">
				<h1>Welcome to me</h1>
				<h3>ANIMATED BOOTSTRAP THEME</h3>
				<a class="btn btn-outline-light btn-lg"href="#course">Get Started</a>
			</div>
		</div>
		<!-- slide 2-->
		<div class="carousel-item" style="background-image: url(img/computers-2.png);">
		</div>
		<!-- slide 3-->
		<div class="carousel-item" style="background-image: url(img/computers-3.png);">
		</div>
	</div><!-- end Carousel inner-->
	<!-- Prev & Next buttons -->
	<a class="carousel-control-prev"href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	</a>
	<a class="carousel-control-next"href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
	</a>
</div>
<div class="jumbotron container-fluid">
<div class="row p-0 ">
		<div class= "col-2">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/6.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
			</div>
		</div>
		<div class= "col-2">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/5.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
		</div>
		</div>
		<div class= "col-sm-2">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/2.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
			</div>
		</div>
		<div class= "col-sm-2">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/4.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
		</div>
		</div>
		<div class= "col-sm-2">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/6.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
		</div>
		</div>
		<div class= "col-sm-2">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/1.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
		</div>
		</div>
</div>
</div>

<div class=" jumbotron container-fluid">
<div class="row p-0 ">
		<div class= "col-sm-3">
			<div class="card mb-3">
		    <img class="card-img-top" src="img/portfolio/2.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
			</div>
		</div>
		<div class= "col-sm-3">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/4.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
		</div>
		</div>
		<div class= "col-sm-3">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/6.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
		</div>
		</div>
		<div class= "col-sm-3">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/2.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
		</div>
		</div>
</div>
</div>

<div class=" jumbotron container-fluid">
<div class="row p-0 ">
		<div class= "col-sm-3">
			<div class="card mb-3">
		    <img class="card-img-top" src="img/portfolio/2.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
			</div>
		</div>
		<div class= "col-sm-3">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/4.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
		</div>
		</div>
		<div class= "col-sm-3">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/6.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
		</div>
		</div>
		<div class= "col-sm-3">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/2.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
		</div>
		</div>
</div>
</div>

<div class="container-fluid jumbotron">
<div class="row p-0 ">
		<div class= "col-2">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/6.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
			</div>
		</div>
		<div class= "col-2">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/5.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
		</div>
		</div>
		<div class= "col-sm-2">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/2.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
			</div>
		</div>
		<div class= "col-sm-2">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/4.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
		</div>
		</div>
		<div class= "col-sm-2">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/6.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
		</div>
		</div>
		<div class= "col-sm-2">
			<div class="card mb-4">
		    <img class="card-img-top" src="img/portfolio/1.png" alt="Card image cap">
		    <div class="card-body">
		    	<h5 class="card-title">Card title</h5>
		    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    	<a href="#" class="btn btn-outline-info">Go somewhere</a>
  			</div>
		</div>
		</div>
</div>
</div>

</div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<!--- End of Script Source Files -->
<div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->
</div>

</body>
</html>
