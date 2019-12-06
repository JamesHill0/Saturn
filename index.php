<?php
  require "header.php";
?>

<main>

<?php
  if (isset($_SESSION['userId'])) {
  echo "You are logged in!";

}
  elseif (!isset($_SESSION['userId'])) {
  echo "You are not logged in!";

  }
  ?>



</main>



<?php
  require "footer.php";
  ?>









