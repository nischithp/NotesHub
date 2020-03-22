<!DOCTYPE html>
<html lang="en">
  

<head>

	    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Upload</title>
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
     Navigation Section
     =============================================== -->  
     <header class="tr-header">
      <nav class="navbar navbar-default">
       <div class="container-fluid">
	    <div class="navbar-header">
		 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
             
		 </button>
		 <a class="navbar-brand" href="photo_home.php?uname=<?php echo $_GET['uname'];  ?>"><img width=90px src="assets/img/bg/logo.png"></a>
		</div><!-- /.navbar-header -->
		<div class="navbar-left">
		 <div class="collapse navbar-collapse" id="navbar-collapse">
		  <ul class="nav navbar-nav">
             <li> <a class="nav-item "href="photo_home.php?uname=<?php echo $_GET['uname'];  ?>">Home</a></li>
                           
                           <li> <a class="nav-item "href="photo_upload.php?uname=<?php echo $_GET['uname'];  ?>">Upload</a></li>            
              
		  </ul>
             
             
		 </div>
		</div><!-- /.navbar-left -->
		<div class="navbar-right">                          
		 <div class="nav navbar-nav">
		   
		<?php
						$servername = "localhost";
						$username = "root";
						$password = "root";
						$dbname= "web";
						$comp = $_GET['uname']; 

						// Create connection
						$conn = new mysqli($servername, $username, $password,$dbname);
						
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 
						$sql= "select name,photo from student where usn='$comp';";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							 // output data of each row
									 $row = $result->fetch_assoc(); 
									 
									   $valx=$row["name"];
                                         $valy=$row["photo"];
                        }
								
					
		echo  '<div class="dropdown mega-avatar">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		   <span class="avatar w-32"><img src="users/'.$valy;
            echo '" class="img-resonsive img-circle" width="45" height="45" alt="..."></span>
		   <!-- hidden-xs hides the username on small devices so only the image appears. -->
		   <span class="hidden-xs">'.$valx;
			
						
						 #<!---INSERT CODE TO QUERY DB TO SEND DATA ABOUT SUBJECTS HERE-->
							
					
						?>
		   </span>
		  </a>
		  <div class="dropdown-menu w dropdown-menu-scale pull-right">
		    
		   <div class="dropdown-divider"></div>
		   <a class="dropdown-item" href="photo_login.php">Sign out</a>
		  </div>
		 </div><!-- /navbar-item -->	
		 
		 </div><!-- /.sign-in -->   
		</div><!-- /.nav-right -->
       </div><!-- /.container -->
      </nav><!-- /.navbar -->
     </header><!-- Page Header --> 
  
	 <!-- ==============================================
	 News Feed Section
	 =============================================== --> 
	 <section class="upload">
	  <div class="container">
	  
	   <div class="row">
	    <div class="col-lg-12">  
		
	     <div class="box">
			 <div class="card">
				 <div class="card-header">
					<form id="uploadbanner" enctype="multipart/form-data" method="post" action="<?php $_PHP_SELF ?>"> <!--specify the link where it has to store here-->
						<b>Choose the file for upload:<input accept=".jpg,.jpeg,.png,.gif" class="form-control no-border" id="image" name="image" type="file"></b>						<div class="box-footer clearfix">
						
						<button type="submit" name="submit" id="submit" class="kafe-btn kafe-btn-mint-small pull-center btn-sm" onclick="this.form.post();" >Upload</button>
						
						
						<?php 
						
		if(isset($_POST["submit"])){
        { 
            
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = 'root';
        $dbName     = 'web';
        $comp = $_GET['uname']; 
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }error_reporting(0);
		ini_set('display_errors', 0);
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
         move_uploaded_file($file_tmp,"uploads/".$d1 .$file_name);
          mysqli_query($db,"INSERT INTO files (filename,uploader,date) VALUES ('".$d1 .$file_name."','".$comp."','".$d1."')");
         echo "Success";
      }else{
         print_r($errors);
      }
   }
            
            
            
            
            
    }
}
                           
  ?>
 </form>                         
</div>                
</div>
		  </div>
		 </div>	
		 
		</div>
	   </div>	   
	  <!--/ container -->
	 </section><!--/ newsfeed -->
     <!-- ==============================================
	 Scripts
	 =============================================== -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/base.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.js"></script>
	<script>
	$('#Slim,#Slim2').slimScroll({
	        height:"auto",
			position: 'right',
			railVisible: true,
			alwaysVisible: true,
			size:"8px",
		});		
	</script>

  </body>


</html>
