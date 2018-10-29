<?php

  $http_client_ip = $_SERVER['HTTP_CLIENT_IP'];

  echo '<h3>$http_client_ip is: '.$http_client_ip.'</h3>';

  $http_x_forward_for = $_SERVER['HTTP_X_FORWARD_FOR'];

  echo '<h3>$http_x_forward_for is: '.$http_x_forward_for.'</h3>';

  $remote_addr = $_SERVER['REMOTE_ADDR'];

  echo '<h3>$remote_addr is: '.$remote_addr.'</h3>';

  // 01. checking to see if $http_client_ip or $http_x_forwarded_for is not empty. If its not empty, the $ip_address will be the $http_client_ip.

  if(!empty($http_client_ip)){

    $ip_address = $http_client_ip;

  } else if(!empty($http_x_forward_for)){

    $ip_address = $http_x_forward_for;

  } else {

    $ip_address = $remote_addr;

  }

  echo $ip_address;

 ?>