<?php
/*$colors = ["black", "Red", "Green", "Blue", "Yellow", "Orange", "brown", "gold"];
 
// Loop through colors array
foreach($colors as $value){
    echo "<li class='list-group-item' style='background-color:{$value}'> {$value} </li>";
}*/

$names = ["Scott","Karen","Mike","Judy","Aaron","Bronson","Brevick"];
$output = "<ul>";
foreach ($names as $name) {  
  $output .= "<li>{$name}</li>";
} 
$output .= "</ul>";


?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Form Project</title>
  </head>
  <body>
    <div class="container">
    <h1>List of names</h1>
    <?php echo $output; ?>
 

    
</ul>
    </div>    
    
  </body>
</html>