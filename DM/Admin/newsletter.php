
<?php


$name="";
$email="";
$errors = array();

//connect to the database
$db = mysqli_connect('localhost','root','','registration');

if (isset($_POST['subscribe'])) {
	 $name = mysqli_real_escape_string($db, $_POST['name']);
     $email = mysqli_real_escape_string($db, $_POST['mail']);
	if (empty($name)) {

		array_push($errors, "Name is required");
	}
	if (empty($email)) {

		array_push($errors, "Email is required");
	}

	if (count($errors) == 0) {

		$sql = "INSERT INTO newsletter (name, 
			mail)
		VALUES ('$name','$email')";
		mysqli_query($db,$sql);
		// $_SESSION['username'] = $username;
		// $_SESSION['success'] = "You are now logged in";
		header('location: index.php');

			}
}