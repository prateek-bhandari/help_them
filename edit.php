	   
	 
	<?php
	 session_start();
	
	if( ($_SESSION["username"]=="")){
		echo "Welcome  " .$_SESSION["username"];
		header("Location: http://localhost/help/login.php"); 
	}
	else{
		echo "Welcome  " .$_SESSION["username"];	
	}

	?>
	

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;900&family=Montserrat:ital@0;1&family=Nunito+Sans:wght@900&display=swap" rel="stylesheet">
<?php include 'header.php';?>
<style>


.submited .btn-warning {
    color: #359dc5;
   /* background-color: #0d6efd;
    border-color: #0d6efd;*/
    font-size: 20px;
    font-family: 'Nunito Sans', sans-serif;
}
.submited {
    display: flex;
    flex-direction: column;
    /* justify-content: center; */
    align-items: center;
    padding: 20px 0;
    background: #f4faff;
    margin: 20px 0;
}
.submited a:not([href]):not([class]), a:not([href]):not([class]):hover {
    /* color: inherit; */
	color: #12b176;
    text-decoration: none;
	font-family: 'Nunito Sans', sans-serif;
	 font-size: 24px;
}
 .submited a {
    color: #0d6efd;
    text-decoration: none;
    font-family: 'Nunito Sans', sans-serif;
    color: #912424;
    font-size: 24px;
    color: #12b176;
}
</style>

<?php 
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
	echo "connection made successfully.<br>";
}
?>



<body>

<?php 

$id= $_GET['id_pass'];
echo "id of selected row is:" ;
echo $id;"<br>" ?>

<br>


<?php if(isset ($_POST['delete'])){
	
	
	$delete="DELETE FROM student_details  WHERE id = $id";
	$result= $connection->query($delete);
	//check for the completing query
	
	if(($connection->query($delete))===true){?>
		<br>
	<div class="submited">
		<a>Deletion of selected row is successful.</a><br><br>
		<button type="button" class="btn btn-warning" ><a href="select_from_db.php">Go to the table</a></button>
	</div>
	
	<?php
	}else{
		echo "Error while deleting" .$connection->error;
	}
}
?>

<?php if(isset ($_POST['submit'])){
	echo "changes that you apply is:  ";
	echo $name=  $_POST['sname'];
	echo $fname= $_POST['fname'];
	echo $email= $_POST['email'];
	
$update= "UPDATE student_details SET student_name = '$name', father_name= '$fname', email= '$email' WHERE id = '$id'";
$result = $connection->query($update);


if ($connection->query($update) === TRUE) {?>

	<br>
	<div class="submited">
	<a>Updation made to the database successfully.</a><br><br>
	<button type="button" class="btn btn-warning" ><a href="select_from_db.php">Go to the table</a></button>
	</div>
	
<?php } else { 
echo "Error: " . $update . "<br>" . $connection->error;
}

}
?>  
		




<?php $sql = "SELECT * FROM  student_details WHERE id=$id;" ?>

<?php $result = $connection->query($sql);?>

<?php
  
	if ($result->num_rows >0) {
		
	 //output data of each row
	
	  $row=$result->fetch_assoc()
     ?>
	
	
	
	
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
		  <div class="form mb-3">
		  
		  <input type="submit" name="submit" value="UPDATE"><br><br>
		  <input type="submit" name="delete" value="DELETE"><br>
		   </div>
           
        </form> 
    </div>    
		 
 <?php 
 }else{
		echo "0 result";
	}
?>
<?php include 'footer.php';?>