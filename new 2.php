<div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" action="" method="post">
          <div class="form mb-3">
		     <label for="sname">Student_name:</label>
             <input type="text" class="form-control" name="sname"  value="<?php echo $row["student_name"]; ?>">
          </div>
		  
		  <div class="form mb-3">
			 <label for="floatingInput">Father_name:</label>
            <input type="text" class="form-control" name="fname"  value="<?php echo  $row["father_name"] ;?>">
          </div>
		  
		  <div class="form mb-3">
			<label for="floatingInput">Mother_name:</label>
            <input type="text" class="form-control" name="mname" placeholder="" value="<?php echo  $row["mother_name"] ;?>">
          </div>
		  
		  <div class="form mb-3">
			<label for="floatingInput">Email_address:</label>
            <input type="email" class="form-control"  name="email" value="<?php echo  $row["email"] ;?>" >
          </div>
		  
		  <div class="form mb-3">
			<label for="floatingInput">Phone_no:</label>
            <input type="number" class="form-control"  name="phone" value="<?php echo  $row["phone_number"] ;?>">
          </div>
		  
		  <div class="form mb-3">
			<label for="floatingInput">Home_address:</label>
            <input type="text" class="form-control" name="h_address" value="<?php echo  $row["home_address"];?>">
          </div>
		  
		   <div class="form mb-3">
		    <label for="floatingInput">Pine_code:</label>
            <input type="number" class="form-control" name="p_code" value="<?php echo  $row["pine_code"];?>">
          </div>
		  
		   <div class="form mb-3">
		    <label for="floatingInput">Qualification:</label>
            <input type="text" class="form-control" name="qualification" value="<?php echo  $row["qualification"];?>" >
          </div>
		  
          <hr class="my-4">   
        </form> 
    </div>
<label for="sname">Student_name:</label>
<label for="fname">Father_name:</label>
<label for="email">Email_address:</label>


/*.section-form .fa-edit:before {
    content: "\f044";
    cursor: pointer;
}*/




<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
    <a class="navbar-brand" href="#">
        <img src="../logo.png" alt="logo" >
     </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
			  <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Home
			  </a>
			 
        </li>
        <li class="nav-item">
             <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			  Future Aucations
			  </a>
			  
        </li>
        <li class="nav-item dropdown">
			  <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Expired Aucations
			  </a>
			  
        </li>
		<li class="nav-item dropdown">
			  <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Live Aucations
			  </a>
			 
        </li>
		<li class="nav-item dropdown">
			  <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				All Aucations
			  </a>
			  
        </li>
       
		<button class=" " >Registration</button>
    
      </ul>
    
	
    </div>
  </div>
</nav>


<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
  
  <div class="topheader">
    <a class="navbar-brand" href="#">
        <img src="../logo.png" alt="logo" >
     </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
			  <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Home
			  </a>
			 
        </li>
        <li class="nav-item">
             <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			  Future Aucations
			  </a>
			  
        </li>
        <li class="nav-item dropdown">
			  <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Expired Aucations
			  </a>
			  
        </li>
		<li class="nav-item dropdown">
			  <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Live Aucations
			  </a>
			 
        </li>
		<li class="nav-item dropdown">
			  <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				All Aucations
			  </a>
			  
        </li>
       
		<button class=" " >Registration</button>
    
      </ul>
    
	 </div>
    </div>
  </div>
</nav>



<div class="search-section">
		<div class="search">
			<label>Auctions </label>
			<input type="text"></input>
		</div>
		<div class="search-right">
			<label>Sort By</label>
			<input type="text"></input>
		</div>
</div>


	<?php
	
		if(isset ($_POST['submit'])){
			
		$user_name=$_POST['user_name'];
		$password=$_POST['password'];
			
		$insert = "INSERT INTO login_details(user_name,password) VALUES ('$user_name','$password')";
		if ($connection->query($insert) === TRUE) {
			echo "New record created successfully\n";
		} else {
		echo "Error: " . $insert . "<br>" . $connection->error;
		}
		*






if(($connection->query($sql))==true)
{?>
	<a href="select_from_db.php"> </a>

<?php} else {
	echo "Error: " . $sql . "<br>" . $connection->error;
  }
}



 <form action="" method="post" >
			
			<input type="text" name="name" value=" <?php echo $row["student_name"]; ?>"><br>
			
			<input type="text" name="fname" value="<?php echo  $row["father_name"] ;?>"><br>
			
			<input type="email" name="email" value="<?php echo  $row["email"] ;?> "><br>
			
			
		 </form>