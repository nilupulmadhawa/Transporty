<?php  require_once('../inc/connection.php');


	$o_password = $_POST['o_password'];
	$n_password = $_POST['n_password'];
	$c_password = $_POST['c_password'];
	$email = $_POST['email'];

	$n_password = mysqli_real_escape_string($connection, $_POST['n_password']);
	$c_password = mysqli_real_escape_string($connection, $_POST['c_password']);
	$new_hashed_password = sha1($o_password);
	$o_password = mysqli_real_escape_string($connection, $_POST['o_password']);
	$o_hashed_password = sha1($o_password);

	

		$email = mysqli_real_escape_string($connection, $_POST['email']);
	    $query = "SELECT * FROM driver WHERE email = $email AND  password = $o_hashed_password LIMIT 1";

	    $result_set = mysqli_query($connection, $query);

	    if ($result_set) {
	        
	    	$query1="UPDATE driver SET password= $new_hashed_password WHERE email = $email";
	    	$result_set = mysqli_query($connection, $query);
	    	if ($result_set) {
				header("Location:account-settings.php?as=1");
			}
	

	    }else{
	    	header("Location:account-settings.php?as=2");
	    }

	


?>