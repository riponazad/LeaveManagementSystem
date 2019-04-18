<?php

include 'connection.php';

if(isset($_POST['name']) && $_POST['email']!= NULL && $_POST['supervisor_id']!= NULL && $_POST['password']!= NULL)
{
	$stmt = $conn->prepare("INSERT INTO employees (name, supervisor_id, email, password) VALUES(?,?,?,?)");
	$stmt->bind_param("siss",$n,$r,$e,$p);
	$n = $_POST['name'];
	$r = $_POST['supervisor_id'];
	$e = $_POST['email'];
	$p = $_POST['password'];
	$stmt->execute();
	header("location: login.php");
	exit();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" type="image/png" href="../favicon/admin favicon.png"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Leave Management System</h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
	<div class="container">
	<div class="col-md-12">
    <!-- Website Overview -->
    <div class="panel panel-default">
      <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Sign up</h3>
      </div>
      <div class="panel-body">
        <form action="signup.php" method="post">
		
		<div class="form-group">
            <label>Full Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your full name" value="">
          </div>
          <div class="form-group">
            <label>Supervisor ID:</label>
            <input type="number" name="supervisor_id" class="form-control" placeholder="Enter your supervisor id in the office" value="">
          </div>
		  <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter a valid email" value="">
          </div>
		  <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Enter a password" value="">
          </div>
          <input type="submit" class="btn btn-danger" value="Sign up">
        </form>
        
      </div>
      </div>
      </div>
	  </div>
	  </section>
	
	
	

    <footer id="footer" style="width: 100%; left: 0; bottom: 0; position: fixed;">
	<div class="container">
      <a href="../index.php" target="_blank">কল্পসাধন ©  All Rights Reserved  |  Developed by কল্পসাধন </a>
	</div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>