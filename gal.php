<?php
require 'scanner.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> App</title>
    <link href="assets/style.css" rel="stylesheet">
</head>
<body>
<center>



<div >

<?PHP



for ($i = 0; $i < count($a); $i++) {


    if($a[$i]=='.' || $a[$i]=='..'||$a[$i]=='.nomedia' )
    {

    }
    else
    {
        echo   "<a href=assets/videos/".$a[$i]." ><video src=assets/videos/".$a[$i]." width=400 height=300 controls muted preload=metadata/></a>";
        echo '<br>';
        echo "<a href=assets/videos/".$a[$i].">".$no.".".$a[$i]."</a>";

        echo '<br>';

    }
}




    ?>




</div>


</center>
</body>
</html>