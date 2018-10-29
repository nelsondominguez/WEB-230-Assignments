<?php

  // 01. checking to see if the roll dice button has been pressed.

  if(isset($_POST['roll'])){

      // 02. the function will generate a random number.
      
    $rand = rand(1, 6);

    echo 'You rolled a '.$rand;

  }

  // 03. Might help generate a password for your new login.

?>

  <form action="index.php" method="POST">
    <input type="submit" name="roll" value="Roll dice.">
  </form>