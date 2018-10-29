<?php

  require 'config.inc.php';

  // 01. It is going through to see if the ip address is blocked.

    foreach ($ip_blocked as $ip) {

      if($ip == $ip_address){

        die('Your IP address, '.$ip_address.' has been blocked');

      }

    }

 ?>

 <h1>Welcome</h1>