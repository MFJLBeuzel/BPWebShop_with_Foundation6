<?php
	session_start();
	include 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(empty($_POST['username']) || empty($_POST['password'])) {
		header('location:loginscreen.php?fout');
	} else {
		$sql = "SELECT * FROM dbo.GEBRUIKER WHERE GEBRUIKERSNAAM = '$username' AND
    WACHTWOORD = '$password'";
		$result = sqlsrv_query($conn, $sql);
		if($result === false){
			die( print_r( sqlsrv_errors(), true));
		}
		if(!sqlsrv_fetch($result)){
			header('location:loginscreen.php?fout2');
		} else {
			while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
				$username = $row['gebruikersnaam'];
			}
			echo 'logged in?';
			$_SESSION['username'] = $username;
			header('location:index.php');
		}

	}
?>
