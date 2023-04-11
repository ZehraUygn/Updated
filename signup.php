<?php 
  include_once 'header.php';
?>
<section class="signup-form">
    <h2>Sign up</h2>
    <form action="signup.inc.php" method="POST">
      <input type="text" name="username" placeholder="username">
      <input type="password" name="password" placeholder="password">
      <button type="submit" name="submit">Sign up</button>
    </form>
    <?php
    if (isset($_GET["error"])){
      if($_GET["error"] == "invalidusername"){
        echo "Try another username";
      }
      else if($_GET["error"] == "invalidpassword"){
        echo "Choose a proper password";
      }
    }?>
</section>