<html>

	<?php 
	
	 
     session_start();
	 $_SESSION["username"] = "";
	 $_SESSION["password"]= "";
	//session_start(); 
	//creating connection with data_base

	$servername="localhost";
	$usename="root";
	$password="";
	$database="xyz";

	//creating connection

	$connection = new mysqli($servername,$usename,$password,$database);
	//checking connection

	if($connection->connect_error){
		die("connection failed" .$connction->connect_error);
	}else{
		echo "";
	}
	?>
	
	
	
	<!-- php for insert data into login_detais file. -->
	
     
   
    <?php
  
   
   if(isset($_POST['submit'])){
      
      echo $myusername = $_POST['user_name'];
      echo $mypassword = $_POST['password']; 
      
      $sql = "SELECT * FROM  student_details WHERE user_name = '$myusername' AND password='$mypassword' " ;
     
	  $result = $connection->query($sql);
     		
      	if (($myusername!="")&($mypassword!="" )) {
	 
			$row = $result->fetch_assoc();
	
			 if($row){
				 echo "login successfully";
				 /*$q = "SELECT student_name FROM  student_details WHERE user_name = '$myusername' AND password='$mypassword' " ;
				  $r = $connection->query($q);
				  $row = mysql_fetch_row($r);*/
				  
				  $_SESSION["username"] = "$myusername";
				 // $_SESSION["password"] = "$mypassword";
				  header("Location: http://localhost/help/select_from_db.php"); 
			 }
			 else{
				
				
				 echo "login failed";
			 }
	 
		}else{

			  echo "login failed";
		 }
	   }
	?>
			
		
		
	
	<!-- CSS only -->
	<?php include 'header.php';?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		.form-signin form {
			width: 30%;
			margin: 70px auto;
		}
		main.form-signin {
			background: aliceblue;
			padding: 30px 0;
		}
	</style>
	<main class="form-signin">
  <div class="container">
  <form action=" " method="post">
    
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="user_name">
      <label for="floatingInput">User name</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <input class="w-100 btn btn-lg btn-primary" type="submit" name="submit" > </input>
    
  </form>
  </div>
</main>



<?php include 'footer.php'; ?>
</html>