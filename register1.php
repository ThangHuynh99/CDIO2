<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body class="container">
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
</button></a></span>
	</div>
/* login form */
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
						<input style="color: blue " type="submit" name="submit" value="Login" class="btn float-right login_btn">			
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

</nav>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="text-center">Registation Form</h1>
			</div>
			<div class="panel-body">
						<?php
				if( isset($_SESSION["thongbao"]) ){
					echo $_SESSION["thongbao"];
					session_destroy();
				}
				?>
				<form action="register_submit.php", method="POST">
				<div class="form-group">
				  <label for="usr">Name:</label>
				  <input required="true" type="text" name="username" class="form-control" id="usr">
				</div>
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input required="true" name="email" type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
				  <label for="birthday">Birthday:</label>
				  <input type="date" name="birthday" class="form-control" id="birthday">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input required="true" name="password" type="password" class="form-control" id="pwd">
				</div>
				<div class="form-group">
				  <label for="confirmation_pwd">Confirmation Password:</label>
				  <input required="true" name="repassword" type="password" class="form-control" id="confirmation_pwd">
				</div>
				<div class="form-group">
				  <label for="address">Address:</label>
				  <input type="text"  name  = "address" class="form-control" id="address">
				</div>
				<button type = "submit" name = "submit" class="btn btn-success">Register</button>
				<button type = "reset" name = "reset" class="btn btn-success">Reset</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>