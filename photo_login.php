<!DOCTYPE html>
<html lang="en">
  
<head>

	    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NotesHub Login</title>
		<meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:description" content="" />		
		
		<!-- ==============================================
		Favicons
		=============================================== --> 
		<link rel="icon" href="assets/img/bg/icon.png">
		<link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.html">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.html">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.html">
		
	    <!-- ==============================================
		CSS
		=============================================== -->
        <link type="text/css" href="assets/css/demos/photo.css" rel="stylesheet" />
				
		<!-- ==============================================
		Feauture Detection
		=============================================== -->
		<script src="assets/js/modernizr-custom.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->	
		
  </head>

<body>

	 <!-- ==============================================
	 Header Section
	 =============================================== -->
     <section class="login">
      <div class="container">
       <div class="banner-content">
	   
		  <h1><img width=150px src="assets/img/bg/wt.png"></h1>
		  <form method="post" class="form-signin" action = "<?php $_PHP_SELF ?>" >
		   <h3 class="form-signin-heading">Please Sign In</h3>
		   <div class="form-group">
		    <input name="usn" width=250px type="text" class="form-control" placeholder="Enter your Usn">
		   </div>
		   <div class="form-group">
		    <input type="password" class="form-control" name="password" placeholder="Enter your Password">
		   </div>
		   <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="subm" onclick="this.form.post();" >Sign in</button>
		   <a class="btn btn-dark " href="photo_register.php" role="button">New User? Click Here To Register!</a>
		   <br/>
		  </form>
		
       </div><!--/. banner-content -->
      </div><!-- /.container -->
     </section> 
  
    
    
    <?php
                                    
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = 'root'; // Password
$db_name = 'web'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
    
    
$username = $_POST['usn'];

$password = $_POST['password'];
                
    if($_SERVER["REQUEST_METHOD"] == "POST") {          
    
$sql= "SELECT * FROM student WHERE usn = '$username' AND password = '$password' ";

$result = mysqli_query($conn,$sql);

$check = mysqli_fetch_array($result);

if(isset($check)){
    echo "success";

header("Location: photo_home.php?uname=".$username);
    
    

}
else{

echo '<script> alert("Please Enter Valid Credentials"); </script>';
echo 'failure';

}

            
    }
    
    
    
    
    
    ?>
    
    
	 
	 
     <!-- ==============================================
	 Scripts
	 =============================================== -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/base.js"></script>

  </body>

</html>
