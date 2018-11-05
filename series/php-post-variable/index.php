<?php

      // 01. It allows you to use the password.

      $match = 'pass123';

      if ( isset($_POST['password']) ) {

        $password = $_POST['password'];

        $msg = '';

        $msgType = 'success';

        // 02. Depending if the password matches it will show incorrect, correct, or if it is empty it will ask for password.

        if ( !empty($password)) {

          if($password == $match){

            echo 'That is correct!';

          }else{

            echo 'That is incorrect!';

          }

        }else{

          echo 'Please enter a password.';

        }
      }
    ?>
        <form action="index.php" method="POST">

            Password:<br>

            <input type="password" name="password"><br><br>

            <input type="submit" class="btn" value="Submit">

        </form>