<?php
  include_once 'header.php';
?>
    <title>MindMyPet</title>
    <img class="pet" src="petminding.png" alt="" />  
<section class="Welcome">
    <h1> Welcome to MindMyPet</h1>
    <?php
    $hellomsg = 'Connect with pet minders. Sign up to start!';
    if (!isset($_SESSION["useruid"])){
      echo $hellomsg;
    }
    else{
      $hellomsg = 'Connect with pet minders.';
      echo $hellomsg;
    }?>
</section>
    
<section>

  <?php
    if (isset($_SESSION["user_name"])){
      echo "<p> Logged in as " . $_SESSION["user_name"] . "</p>";
      echo "<button><a href='Request.php'>Request Pet Minding</a></button>";
      echo "<button><a href='Minding.php'>Minding a Pet</a></button>";
    }?>
</section>