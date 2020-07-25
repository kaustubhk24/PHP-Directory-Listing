<?php

require 'scanner.php';














?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite App</title>
  <link href="assets/style.css" rel="stylesheet">
</head>
<body>
<center>
<div class="pagination">
  <a  href="index.php">1</a>
  <a href="index2.php">2</a>
  <a href="index3.php">3</a>
  <a class="active" href="index4.php">4</a>
  <a href="index5.php">5</a>
  <a href="index6.php">6</a>
  <a href="index7.php">7</a>
  <a href="index8.php">8</a>
</div>


<div >

<?PHP



for ($i = 78; $i < 103; $i++) {
    $no=$i-2;

    if($a[$i]=='.' || $a[$i]=='..')
    {

    }
    else
    {
      echo   "<a href=data/".$a[$i]." ><video src=data/".$a[$i]." width=400 height=300 controls muted preload=metadata/></a>";
        echo '<br>';
        echo "<a href=data/".$a[$i].">".$no.".".$a[$i]."</a>";

        echo '<br>';
    }
}




    ?>




</div>

<div class="pagination">
  <a  href="index.php">1</a>
  <a href="index2.php">2</a>
  <a href="index3.php">3</a>
  <a class="active" href="index4.php">4</a>
  <a href="index5.php">5</a>
  <a href="index6.php">6</a>
  <a href="index7.php">7</a>
  <a href="index8.php">8</a>
</div>
</center>
</body>
</html>