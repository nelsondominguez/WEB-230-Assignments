<?php


	require_once('include/header.inc.php');


  $offset = 0;

  
  if(isset($_POST['text'])){

    
    $text = $_POST['text'];

    $search = 'Acme';

    $replace = 'Insights';

    
    $search_length = strlen($search);

      if(!empty($text)&&!empty($search)&&!empty($replace)){

        while ($strpos = strpos($text, $search, $offset)) {

          
          $offset = $strpos + $search_length;

          
          $text = substr_replace($text, $replace, $strpos, $search_length);

        }
        echo $text;

      } else {

        
        echo 'Please fill in all fields.';

      }
  }


	

?>

<hr>


<form action="index.php" method="POST">

  <textarea name="text" rows="6" cols="30"></textarea><br><br>

  <input type="submit" value="Review">

</form>

<?php
require_once('include/footer.inc.php');
?>
