<?php 


$output = "<ul>";



for ($i = 1; $i < 5; $i++ ) {
    
    $output .= "<li>".$i."</li>";
    $output .= "<ul>";
    for ($j = 1; $j < 6; $j++ ) {
        $output .= "<li>".$j."</li>";

    }
    $output .= "</ul>";
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
    <h1>Nested Loop</h1>
    <?php echo $output; ?>
 

    
    </div>    
    
  </body>
</html>