<?php

    require 'connect.inc.php';

?>

  <form action="index-119.php" method="GET">

    Choose a food type:

    <select name="uh">

      <option value="u">Unhealthy</option>

      <option value="h">Healthy</option>

    </select><br><br>

    <input type="submit" value="Submit">

  </form>

<?php

    if(isset($_GET['uh']) && !empty($_GET['uh'])){

        $uh = strtolower($_GET['uh']);

        if($uh=='u'||$uh=='h'){

            $query = "SELECT food, calories FROM food WHERE healthy_unhealthy = '$uh' ORDER BY id DESC";

            if($query_run = mysqli_query($con, $query)){

              while ($query_row = mysqli_fetch_assoc($query_run)) {

                $food = $query_row["food"];

                $calories = $query_row['calories'];

                echo $query_row['food'] . ' has ' . $calories . ' calories.<br/>';

              }
            }else{
            
              echo("Error description: " . mysqli_error($con));
            }
        }
    }
?>