<?php

  $time = time();

  $actual_time = date('D M Y @ H:i:s', $time);

  $time_modified = date('d M Y @ H:s', $time);

  echo '<h3>The current dte/time is: '.$actual_time.'<h3>';

  echo '<h3>The modified dte/time is: '.$time_modified.'<h3>';

  /*
01. Explaine what the time function is. $time = time();
    Gives information on date and time.

02. Explain what the following line of code is doing and how. $actual_time = date('D M Y @ H:i:s', $time);
    Formats the date function and displays the time correctly.

03. Explain what the following line of code is doing and how. $time_modified = date('d M Y @ H:s', $time);
    modifies the time which allows it to progress.

04. Explain a way the $actual_time might be used in a web application. echo '<h3>The current dte/time is: '.$actual_time.'<h3>';
    Display the time when a user makes a comment in a blog post.

05. Explain a way the $time_modified might be used in a web application. echo '<h3>The modified dte/time is: '.$time_modified.'<h3>';
    Display time when an action must be done within time limit.
*/
?>