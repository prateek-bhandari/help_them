<html>


	
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


<?php
  if(isset($_POST['log_out'])){
	  
// remove all session variables
session_unset();

// destroy the session
session_destroy();
header("Location: http://localhost/help/login.php"); 
  }
?>
	

<?php include 'header.php'; ?>


<style>

.fa, .fas {
    /* font-family: "Font Awesome 5 Pro"; */
    /* font-weight: 900; */
}	
.section-form li {
    float: left;
    width: 14%;
    list-style: none;
    text-align: center;
}
.section-form ul.table-rows {
    float: left;
    width: 96%;
    border: 1px solid #c79292;
    margin: 0;
    padding: 16px 20px;
}

.log_out input[type="submit"] {
    float: right;
    display: block;
    margin: 1% 8%;
    color: #1527ab;
    padding: 6px 22px;
    crusor: pointer;
    border: 1px solid #c3bcbc;
    border-radius: 5px;
}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/></header>




<?php
$servername="localhost";
$username="root";
$password="";
$dbname="xyz";

//making connection with database

$connection= new mysqli($servername,$username,$password,$dbname);

//checking connection
if($connection->connect_error)
{
	die("connection faileddf".$connection->connect_error);
}
else
{
	
}
?>
<br>


<?php
$sql = "SELECT * FROM  student_details";
$result = $connection->query($sql);?>
  
 <div class="container">
 
 <div class="log_out">
    <form action="" method="post">
		<input type="submit" name="log_out" value="logout"></input>
	</form>
 </div>
 
 
 <div class="section-form">
	<ul class="table-header table-rows">
		<li>Id</li>
		<li>Name</li>
		<li>Father</li>
		<li>Email</li>
		<li>Home</li>
	</ul>
	
	<?php
	if ($result->num_rows >0) {
	// output data of each row
  
    while($row = $result->fetch_assoc()) { ?>
	
	<ul class="table-rows" method="post">
		<li><?php echo  $row["id"] ;?></li>
		<li> <?php echo $row["student_name"]; ?></li>
		<li><?php echo  $row["father_name"] ;?></li>
		<li><?php echo  $row["email"] ;?></li>
		<li><?php echo  $row["home_address"] ;?></li>
		<li><?php $xyz= $row["id"];?>
		<a href="edit.php?id_pass=<?php echo $xyz; ?>" ><i class="fa fa-edit"></i></a> </li>
		<li>
		<li><?php $xyz= $row["id"];?><a href="edit.php?id_pass=<?php echo $xyz; ?>"><i class="fa fa-trash-alt"></i></a></li>
	</ul>
	<?php }
	} else{
		echo "0 result";
	}
	?>
	
  </div>
 </div>
 
 <div class="clear-section">
	<br><br>
 </div>
<?php
mysqli_close($connection);
?>

</div>



</html>