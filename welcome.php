
<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="xyz";
	
	//cratating conntion between database and our project.
	
	$connection= new mysqli($servername,$username,$password,$dbname);
	//check connection
	if($connection->connect_error){
		die("connection failerd" .$connection->connection_error);
	}
	
?>


<br>






Welcome: <?php echo "Hey this is from php"?><br>

<?php if(isset($_POST['submit'])){
	
	$student_name=$_POST["sname"];
	$father_name=$_POST["fname"];
	$mother_name=$_POST["mname"];
	$date_of_birth=$_POST["dob"];
	
	$phone_no=$_POST["phone"];
	$email=$_POST["email"];
	$home_address=$_POST["h_address"];
	$pine_code=$_POST["p_code"];
	
	$qualification=$_POST["qualification"];
	
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
   
?>

	
<?php

$sql= "INSERT INTO student_details(student_name,father_name,mother_name,date_of_birth,phone_number,email,home_address,pine_code,qualification,user_name,password)
     VALUES('$student_name','$father_name','$mother_name','$date_of_birth','$phone_no','$email','$home_address','$pine_code','$qualification','$user_name','$password')";
	 
if ($connection->query($sql) === TRUE) {
	
	echo "New record created successfully\n";
} else {
	header("Location: http://localhost/help/select_from_db.php");
echo "Error: " . $sql . "<br>" . $connection->error;
}

}
$connection->close();


?>

