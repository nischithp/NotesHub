<!DOCTYPE html>
<html lang="en">
  
<head>

	    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NotesHub Student Registration</title>
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
	   
		  <h1><img max-width=250px src="assets/img/bg/wt.png"></h1>
		  <form method="post" enctype="multipart/form-data" class="form-signin" action="<?php $_PHP_SELF ?>" >
		   <h3 class="form-signin-heading">Register</h3>
		   <div class="form-group">
               
		    <input name="username" type="text" class="form-control" placeholder="Username">
		   <input name="usn" type="text" class="form-control" placeholder="USN">
		    <input type="password" class="form-control" name="password" placeholder="Password">
               <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
               	<b>upload your picture:<input accept=".jpg,.jpeg,.png,.gif" class="form-control no-border" id="image" name="image" type="file"></b>						<div class="box-footer clearfix">
		   </div>
		   <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="submit" onclick="this.form.post();" >Sign Up</button>
		   <br/>
              </div>
		   <a class="btn btn-dark " href="photo_login.php" role="button">Already have an account? Click Here to Sign In</a>
		  </form>
		
       </div><!--/. banner-content -->
      </div><!-- /.container -->
     </section> 
  <?php
     echo "something";
   if(isset($_POST["submit"])){
        echo "something";
    $db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = 'root'; // Password
$db_name = 'web'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
    
  
$username = $_POST["username"];
                
$usn = $_POST["usn"];                

$password = $_POST["password"];
                
$password2 = $_POST["password2"];
      
              
                
                
          
            if ($password==$password2)
   {
          
          echo "something";
          if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      $d1 = date("y-m-d_h-i-s");
                
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG, JPG or PNG file.";
      }
      
      if($file_size > 20097152) {
         $errors[]='File size must be less than 20 MB';
      }
	  
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"users/".$d1 .$file_name);
          $sql= "INSERT INTO student(usn,name,photo,password) VALUES ('$usn','$username','$d1$file_name','$password');";
          $result = mysqli_query($conn,$sql);
         echo "Success";
          if ($result) {
	header("Location: photo_login.php");
}
           else 
  {
	die ('SQL Error: ' . mysqli_error($conn));

  } 
         
      }
            
         print_r($errors);
      
   }
            }
          
               else{
          $message = "Re-enter the passwords";
echo "<script type='text/javascript'>alert('$message');</script>";
      }  
          
 /*--------------------------------------         
                
   if ($password==$password2)
   {
$sql= "INSERT INTO login(uname,password) values ('".$username."', '".$password."');";

$result = mysqli_query($conn,$sql);
       
if ($result) {
	header("Location: photo_login.php");
}
  else 
  {
	die ('SQL Error: ' . mysqli_error($conn));

  }  
   }
      else{
          $message = "Re-enter the passwords";
echo "<script type='text/javascript'>alert('$message');</script>";
      } 
     --------------------------------------------*/     
          

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
