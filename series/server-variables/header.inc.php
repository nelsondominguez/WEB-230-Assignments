        <?php

  include 'config.inc.php';

  // 01. access information on the user.

  $script_name = $_SERVER['SCRIPT_NAME'];

  // 02. echos images from local host.
  echo $images;

 ?>

  <!-- 03. the user will stay on the same page even after they submit. -->

  <form action="<?php echo $script_name; ?>" method="POST">

    <input type="submit" name="submit" value="Submit">

  </form>