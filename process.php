
<?php include 'database.php'; ?>
 
<?php
 
// create a variable
$name=$_POST['name'];

$password=$_POST['password'];
 
//Execute the query
 
mysqli_query($connect "INSERT INTO user(name,password)
				VALUES('$name','$password') ");

if(mysqli_affected_rows($connect) > 0){
	echo "<p>details Added</p>";
	echo "<a href="index.html">Go Back</a>";
} else {
	echo "details NOT Added<br />";
	echo mysqli_error ($connect);
}
?>