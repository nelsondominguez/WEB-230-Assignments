<?php

  // 01. Stores the page content in an internal buffer.

  ob_start(); ?>

<h1>My Page</h1>

This is my page.

<?php

    $redirect_page = 'http://google.com';

    $redirect = true;

    if($redirect == true){

      // 02. redirecting the user to google.com.

      header('Location: '.$redirect_page);

    }

    // 03. It allows us to put the page contents back into the page.

    ob_end_flush();

 ?>