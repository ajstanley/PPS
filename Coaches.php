<?php

function get_snippets($dir) {
  $files = scandir("CoachSnippets/$dir");
  foreach ($files as $file) {
    if ($file[0] != '.') {
      include("CoachSnippets/$dir/$file");
    }
  }
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Coaches</title>

    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <script src="js/jquery/jquery-1.6.1.min.js" type="text/javascript"></script>
    <script src="js/apstemplate.js" type="text/javascript"></script>
    <script src="js/coach.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" media="screen,print" href="Home_files/Home.css" />
    <link rel="stylesheet" type="text/css" media="screen,print" href="css/aps.css" />

    <!--[if lt IE 8]><link rel='stylesheet' type='text/css' media='screen,print' href='Home_files/HomeIE.css'/><![endif]-->
    <!--[if gte IE 8]><link rel='stylesheet' type='text/css' media='screen,print' href='Media/IE8.css'/><![endif]-->
  </head>

  <body>
    <div style="text-align: center; ">
      <div id="body_content">
        <div  id="navbar"> </div>

        <?php include('Snippets/logo_layer.php') ?>



        <div style="margin-left: 0px; position: relative; padding:4%" id="body_layer">



          <div id="content_body"  style="margin-left: 0px; position: relative;  z-index: 10; ">
            <div class="header_content">

              <div class="subheader">
                <h2>Coaches for the 2013 Symposium</h2>
                <p>  The 2013 Pacific Paddle Symposium Commitee is hard at work finalizing a list of skilled and enthusiastic coaches.<br /><br />
                  Check here regularly to watch this list grow!
                </p>
                <div class="gap"></div>
              </div>
              <div class="gap"><hr /></div>
            </div>
            <?php get_snippets('US'); ?>
            <?php get_snippets('Canada'); ?>
            <?php get_snippets('BC'); ?>

    
           

          </div>
        </div>
      </div>
    </div>
  </body>
</html>


