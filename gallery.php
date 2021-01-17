<?php
require 'scanner.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App

    </title>
    <link href="css/video-js.css" rel="stylesheet">
<script src="js/video.js"></script>
</head>
<body>



<?php

for($i = 0; $i < count($a); $i++)
{

    if($a[$i]=='.'||$a[$i]=='.nomedia' || $a[$i]=='..')
    {

    }
    else
    {
        echo "<div style=display:none; id=".$a[$i].">";
        echo "     <video class='lg-video-object lg-html5 video-js vjs-default-skin' controls preload='none'>";
        echo "<source src=assets/videos/".$a[$i]." type='video/mp4'>";
        echo "</video>";
        echo "</div>";



    }


}


 ?>
    



    <ul id="html5-videos">

    <?php

for($i = 0; $i < count($a); $i++)
{

    if($a[$i]=='.'||$a[$i]=='.nomedia' || $a[$i]=='..')
    {

    }
    else
    {
        echo "<li data-poster=assets/images/".str_replace("mp4","png",$a[$i])." data-sub-html='video caption1' data-html=#".$a[$i]." >";
        echo " <img onclick=window.open('assets/videos/".$a[$i]."') src=assets/images/".str_replace("mp4","png",$a[$i]).">";
        echo "</li>";
    



    }


}


 ?>





</ul>







    

</body>
</html>