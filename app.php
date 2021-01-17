
<?php
require 'scanner.php';


?>

<!doctype html>
<html lang="en">

<head>
<script>



</script>
    <!-- Basic Page Needs
    ================================================== -->
    <title>Video Player</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/night-mode.css">
    <link rel="stylesheet" href="css/framework.css">
    <link rel="stylesheet" href="css/bootstrap.css"> 

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="css/icons.css">

 
</head>


<body class="course-watch-page">

        <!-- Wrapper -->
        <div id="wrapper">
    
            <div class="course-layouts">
    
                <div class="course-content bg-dark">
    
                    <div class="course-header">
    
                        <h4 class="text-white">  <a href="assets/videos/">View List</a>
 </h4>
   
                        <div>
    
                            <a href="#">
                                <i class="icon-feather-help-circle btns"></i>
                            </a>
                           
    
                            <a hred="#">
                                <i class="icon-feather-more-vertical btns"></i>
                            </a>
                         
                            <a href="#" class="uk-visible@s" uk-toggle="target: .course-layouts; cls: course-sidebar-collapse">
                                <i class="btns icon-feather-chevron-right"></i>
                            </a>
    
                        </div>
    
                    </div>
    
                    <div class="course-content-inner">
    
                        <ul id="video-slider" class="uk-switcher">


 <?php

for($i = 0; $i < count($a); $i++)
{

    if($a[$i]=='.'||$a[$i]=='.nomedia' || $a[$i]=='..')
    {

    }
    else
    {
        echo "<li>";
        echo " <div class='video-responsive'>";
        echo "<video src=assets/videos/".$a[$i]." controls muted preload='auto'>";
        echo "</div>";
        echo "</li>";

    }


}


 ?>
    
    

                        </ul>
    
                    </div>
    
                </div>
    
                <!-- course sidebar -->
    
                <div class="course-sidebar uk-flex-last">
                    <div class="course-sidebar-title">
                        <h3> Select Video</h3>
                    </div>
                    <div class="course-sidebar-container" data-simplebar>
    
                        <ul class="course-video-list-2" uk-switcher=" connect: #video-slider ; animation: uk-animation-slide-right-small, uk-animation-slide-left-medium">
         
                        
                        
 <?php

for($i = 0; $i < count($a); $i++)
{
  

    if($a[$i]=='.'|| $a[$i]=='.nomedia' || $a[$i]=='..')
    {

    }
    else
    {
        
        echo "<li>";
        echo "<a href='#'>";
        echo "<img  src=assets/images/".str_replace("mp4","png",$a[$i]).">";
        echo " <span  class='now-playing'>Playing</span>";
        echo "<span  class='video-title'> Video ".$a[$i]." </span>  ";

        echo "</a>";
        echo "</li>";

    }


}


 ?>

                        
                        
                        </ul>
    
    
                    </div>
    
                </div>
    
            </div>
    
    
    
        </div>

     
        <script>
            (function (window, document, undefined) {
                'use strict';
                if (!('localStorage' in window)) return;
                var nightMode = localStorage.getItem('gmtNightMode');
                if (nightMode) {
                    document.documentElement.className += ' night-mode';
                }
            })(window, document);
    
    
            (function (window, document, undefined) {
    
                'use strict';
    
                // Feature test
                if (!('localStorage' in window)) return;
    
                // Get our newly insert toggle
                var nightMode = document.querySelector('#night-mode');
                if (!nightMode) return;
    
                // When clicked, toggle night mode on or off
                nightMode.addEventListener('click', function (event) {
                    event.preventDefault();
                    document.documentElement.classList.toggle('night-mode');
                    if (document.documentElement.classList.contains('night-mode')) {
                        localStorage.setItem('gmtNightMode', true);
                        return;
                    }
                    localStorage.removeItem('gmtNightMode');
                }, false);
    
            })(window, document);
        </script>
    
        <script src="js/jquery-2.2.4.min.js"></script>
        <script>
            function make_button_active(tab) {
                //Get item siblings
                var siblings = tab.siblings();
    
                /* Remove active class on all buttons
                siblings.each(function(){
                    $(this).removeClass('active');
                }) */
    
                //Add the clicked button class
                tab.addClass('watched');
            }
    
            //Attach events to highlight-watched
            $(document).ready(function () {
    
                if (localStorage) {
                    var ind = localStorage['tab']
                    make_button_active($('.highlight-watched li').eq(ind));
                }
    
                $(".highlight-watched li").click(function () {
                    if (localStorage) {
                        localStorage['tab'] = $(this).index();
                    }
                    make_button_active($(this));
                });
    
            });
        </script>

    <!-- javaScripts
    ================================================== -->
    <script src="js/framework.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/simplebar.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap-select.min.js"></script>

    
</body>

</html>