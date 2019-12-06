<?php
	require "header.php";

	if (!isset($_SESSION['userId'])) {
	header("Location: ../");
}



  ?>
<br>
<form action="includes/profile.inc.php" method="POST">
        <input type="text" name="firstname" placeholder="First Name">
        <input type="text" name="lastname" placeholder="Last Name">
        <button type="submit" name="profile-save">Save Changes</button>
        </form>
</form>

