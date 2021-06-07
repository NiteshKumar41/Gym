<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
	    body{
	    	background-image: url(img/back.jpg);
	    	background-size:cover;
	    }
	    hr{
	    	background: white;	
	    }

		.contact-form{
			background:rgba(0,0,0, .6);
			color:white;
			margin-top: 100px;
			padding: 20px;
			box-shadow: 0px 0px 10px 3px grey;
		}
   </style>


</head>
<body>

<header>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Antil Fitness</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="">
        <a class="nav-link" href="index.php" >Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="packages.php">Packages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Facilities.php">Facilities</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="Contact.php">Contact</a>
      </li>    
    </ul>
  </div>  
</nav>

</header>



<div class="container contact-form">
	<h1>Contact form</h1>
	<hr>

	<div class="row">
   
       <div class="col-md-6">
       	<address>Gali no 6loharu, road, Pilani, Rajasthan 333031</address>
       	<p>Email:- test@email.com</p>
       	<p>Phone:- 34563463434</p>
       </div>

       <div class="col-md-6">
       		<form method="POST" action="">
         <div class="form-group">
         	<label>Name</label>
         	<input type="text" name="name" class="form-control">
         </div>

         <div class="form-group">
         	<label>Email</label>
         	<input type="text" name="email" class="form-control">
         </div>

         <div class="form-group">
         	<label>Massage</label>
         	<textarea  class="form-control" name="message" rows="7"></textarea>
         </div>

         <div class="form-group">
         	<button class="btn btn-primary btn-block" name="send">Send</button>
         </div>
         	</form>
       </div>

    </div>

</div>

<br>
<br>
<br>

<footer>
<center>
	&copy;<b>Antil Fitness</b>
</center>
</footer>

<?php
if(isset($_POST['send']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $mess = "INSERT into contact (name,email,message) VALUES ('$name','$email','$message')";
if(mysqli_query($conn, $mess)){
    echo '<script> alert("message successfully.")</script>';
} else{
    echo "error";
}
}
else
{
  echo "btn not clicked";
}
?>

</body>
</html>