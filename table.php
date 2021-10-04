<?php

$output = "";



for ($i = 1; $i < 16; $i++ ) {
    
    $output .= "<tr>";
    for ($j = 1; $j < 6; $j++ ) {
        $output .= "<td>"."Row ".$i." Cell ".$j."</td>";

    }
    $output .= "</tr>";
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        table, th, td {
        border: 1px solid black;
        }
</style>
    <title></title>
  </head>
  <body>
    <div class="container">
    <h1>Screenshot of Table</h1>
    <table style="border: solid;">
        <?php echo $output; ?>
    </table>

    
    </div>    
    
  </body>
</html>