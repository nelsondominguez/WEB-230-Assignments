<?php

  // 1. We are creating an offset variable because it is important with the substring function that is being created. Once we find an instance of a word inside the string, the offset helps us search the word that is being replaced again. This will allow the loop to go through the string until no more values have been found.
  $offset = 0;

  // 1.The if statement is used to check the text. The statement also checks whether the search for and replace with is set. The if statement takes data from the form and checks if the form has been submitted..
  if(isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])){

    // 3. The reason why we would make a variable to capture a variable we could already use is that it creates a shorthand way of using the variables. The variables have to be made in the if statement and if it is made outside it would create an error. This would allow  for easier coding
    $text = $_POST['text'];

    $search = $_POST['searchfor'];

    $replace = $_POST['replacewith'];

    // 4. We need to create this variable $search_length because it allows us to calculate the new offset. The variable will loop around to begian the search for the next instance. This will then find the length of the text that was searched by the user.
    $search_length = strlen($search);

      if(!empty($text)&&!empty($search)&&!empty($replace)){

        while ($strpos = strpos($text, $search, $offset)) {

          // 5. The reason we change the value of the $offset variable is that it will allow the offset to change dynamically. It will help offset the variable. This will enable the search to begin again.
          $offset = $strpos + $search_length;

          // 6. Where getting the string position the user searched for.  This will allow us to update the function. This will also allow us to put the text altogether.
          $text = substr_replace($text, $replace, $strpos, $search_length);

        }
        echo $text;

      } else {

        // 7. It is included because it came with an if statement with the variables not being empty. It is important to create an else statement that informs if nothing was submitted. If nothing was submitted a text message will appear informing the user.
        echo 'Please fill in all fields.';

      }
  }
?>

<hr>

<!-- // 8. The action attribute names where to transfer the form-data when a form is submitted. The method attribute defines how to transfer form-data. The form-data is then transferred to the page named in the action attribute. The form-data can be sent as method="get" or as method="post". -->
<form action="index.php" method="POST">

  <textarea name="text" rows="6" cols="30"></textarea><br><br>

  Search for:<br><br>
  <input type="text" name="searchfor"><br><br>

  Replace with:<br>
  <input type="text" name="replacewith"><br><br>

  <!-- // 09. The value attributes help input and option elements. The value attribute specifies the initial value of the element. The type attribute specifies the type of button. -->
  <input type="submit" value="Find and Replace">

</form>