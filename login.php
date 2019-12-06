<?php
  include_once "header.php";
?>

<br>

        <?php
        if (isset($_SESSION['userId'])) {
  
           echo '<form action="includes/logout.inc.php" method="POST">
                <button type="submit" name="logout-submit">Logout</button>
            </form>';

        }

        elseif (!isset($_SESSION['userId'])) {
        echo '<form action="includes/login.inc.php" method="POST">
              <input type="text" name="mailuid" placeholder="Email">
              <input type="password" name="pwd" placeholder="Password">
              <button type="submit" name="login-submit">Login</button>
              </form>';

        }
        ?>