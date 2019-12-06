<?php 

session_start();

if (isset($_SESSION["userId"])) {

	require "dbh.inc.php";

	$first = $_POST['firstname'];
	$last = $_POST['lastname'];
	$idUsers = $_SESSION['userId'];
	$stmt = mysqli_stmt_init($conn);
	$sql = "UPDATE users SET firstUsers=?, lastUsers=? WHERE idUsers=?;";
	



	if (!mysqli_stmt_prepare($stmt, $sql)) {
	header("Location: ../profile.php?error=sqlerror");

	exit();
	}

	else {
	mysqli_stmt_bind_param($stmt, "ssi", $first, $last, $idUsers);
	mysqli_stmt_execute($stmt);
	header("Location: ../profile.php?profilechanges=success");
	}
}

else {
header("Location: ../profile.php?profilechanges=failure");

}


