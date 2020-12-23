<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'cosmetic');


$email		= "";
$password 	= "";
$fullname	= "";
$errors   	= array();

if (isset($_POST['register_btn'])) {
	register();
}

function register(){

	global $conn, $errors, $email, $password, $fullname;

	$email		= e($_POST['email']);
	$password	= e($_POST['password']);
	$conf_pass	= e($_POST['conf_pass']);
	$fullname	= e($_POST['fname']);

	// form validation: ensure that the form is correctly filled
	if (empty($email)) { 
		array_push($errors, "Email is Required!"); 
	}
	if (empty($password)) { 
		array_push($errors, "Password is Required!"); 
	}
	if ($password != $conf_pass) { 
		array_push($errors, "Password Do Not Match"); 
	}
	if (empty($fullname)) { 
		array_push($errors, "Fullname Required"); 
	}

	if (count($errors) == 0) {

		if (isset($_POST['user_type'])) {
			
			$query = "INSERT INTO accounts (accnt_id, email, password, fname, user_type) 
                      VALUES('', '$email', '$password', $fullname, '$usertype')";
            mysqli_query($conn, $query);
            ?>

            <script>
                    window.alert('Register Success!');
                    window.location.href='login.php';
			</script>
            <?php

		}else{
			
			$query = "INSERT INTO accounts (accnt_id, email, password, fname, user_type) 
                      VALUES('', '$email', '$password', '$fullname', 'user')";
			mysqli_query($conn, $query);
			
            ?>
            <script>
                    window.alert('Register Success!');
                    window.location.href='login.php';
			</script>
            <?php
			$logged_in_user_id = mysqli_insert_id($conn);
			$_SESSION['user'] = getUserById($logged_in_user_id);;				
		}
	}
}

function getUserByEmail($email){
	global $conn;
	$query = "SELECT * FROM accounts WHERE email =" . $email;
	$result = mysqli_query($conn, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

function e($val){
	global $conn;
	return mysqli_real_escape_string($conn, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

if (isset($_POST['login_btn'])) {
	login();
}

function login(){
	global $conn, $email, $errors;

	$email 		= e($_POST['email']);
	$password 	= e($_POST['password']);

	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
    }
    
	if (count($errors) == 0) {

		$query = "SELECT * FROM accounts WHERE email='$email' AND password='$password' LIMIT 1";
		$results = mysqli_query($conn, $query);

		if (mysqli_num_rows($results) == 1) {

			$logged_in_user_id = mysqli_fetch_assoc($results);
			if ($logged_in_user_id['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user_id;
				$_SESSION['success']  = "Logged In";
				header('location: admin/index.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user_id;
				$_SESSION['success']  = "Logged In";

				header('location: user/index.php');
			}
		}else {
			array_push($errors, "Wrong Email and Password Combination");
		}
	}
}

function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}	

?>