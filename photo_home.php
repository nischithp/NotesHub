<!DOCTYPE html>
<html lang="en">
  
<head>

	    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NotesHub Home Page</title>
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
  
	
	 <section class="newsfeed">
		<!--/ col-lg-3 -->
	    <div class="col-lg-6">
		
            
            
            
            
            
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
               
        
						$sql= "SELECT filename,uploader,date,photo FROM files JOIN student on files.uploader=student.usn ORDER BY date DESC LIMIT 5";
						$result = $conn->query($sql);
						
							 // output data of each row
									 while($row = $result->fetch_assoc()) 
									 { 
        
            
       echo '  <div class="cardbox">
		 
          <div class="cardbox-heading">
         
           <div class="media m-0">
            <div class="d-flex mr-3">
			 <a href="#"><img class="img-responsive img-circle" src="users/'.$row["photo"].'" alt="User"></a>
			</div>
            <div class="media-body">
             <p class="m-0"> ';
			 
									 echo  $row["uploader"];
									echo "</p> <small><span>";
									 echo  $row["date"];
                                    echo "</span></small>";
                
          echo ' </div>
           </div>
          </div>
              
		  <div class="cardbox-item">
		   <a href="#myModal?name="'.$row["filename"].'" data-toggle="modal">
		   
		    <img class="img-responsive" src="uploads/'.$row["filename"].'" alt="MaterialImg">
		   </a> 
          </div>
          </div>
          
          
          ';
                                     }
            
            ?>
             </div>
            </section>  
	      	
        
	     
          
		<div class="col-lg-3">
        <div class="trending-box">
		  
         <h4>Your uploads</h4>
            
            
            
            
            
            <?php
             
             
						$servername = "localhost";
						$username = "root";
						$password = "root";
						$dbname= "web";
						
						// Create connection
						$conn = new mysqli($servername, $username, $password,$dbname);
						
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 
             
             
             $sql= "SELECT filename FROM files WHERE uploader='".$_GET['uname']."'";
						$result = $conn->query($sql);
						
							 // output data of each row
									 while($row = $result->fetch_assoc()) 
									 { 
             
           echo '<div class="col-lg-6">
		   <a href="#"><img src="uploads/'.$row["filename"];
               echo'" class="img-responsive" alt="Image"/></a>
		  </div>';
             
             
                                     }
             
	
             
              
              
              
              
             ?>
            
            
		
             
             
             
             
             
             
             
             
             
		 </div>
        </div>			
		
		
	     
       <!-- ==============================================
	 Modal Section
	 =============================================== -->
     <div id="myModal" class="modal fade">
      <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-body">
		
         <div class="row">
		 
          <div class="col-md-8 modal-image">
           <img class="img-responsive" src="assets/img/posts/WebAssignment.jpeg" alt="Image"/>
          </div><!--/ col-md-8 -->
          <div class="col-md-4 modal-meta">
           <div class="modal-meta-top">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			 <span aria-hidden="true">×</span><span class="sr-only">Close</span>
			</button><!--/ button -->
            <div class="img-poster clearfix">
             <a href="#"><img class="img-responsive img-circle" src="assets/img/users/nischith.jpg" alt="Image"/></a>
             <strong><a href="#">Nischith Javagal</a></strong>
             <br/>
		     
            </div><!--/ img-poster -->
			  
            
			  
            <div class="modal-meta-bottom">
			 <ul>
			   <span class="thumb-xs">
				<img class="img-responsive img-circle" src="assets/img/users/nischith.jpg" alt="Image">
			   </span>
			   <div class="comment-body">
				 <input class="form-control input-sm" type="text" placeholder="Write your comment...">
			   </div><!--/ comment-body -->	
              </li>				
             </ul>				
            </div><!--/ modal-meta-bottom -->
			  
           </div><!--/ modal-meta-top -->
          </div><!--/ col-md-4 -->
		  
         </div><!--/ row -->
        </div><!--/ modal-body -->
		
       </div><!--/ modal-content -->
      </div><!--/ modal-dialog -->
     </div><!--/ modal -->
	 
	 
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
