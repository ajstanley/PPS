
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>PPS Gallery</title>

    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <script src="js/jquery/jquery-1.6.1.min.js" type="text/javascript"></script>
    <script src="js/jquery/slides.min.jquery.js" type="text/javascript"></script>
    <script src="js/apstemplate.js" type="text/javascript"></script>
    <script src="js/coach.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" media="screen,print" href="Home_files/Home.css" />
    <link rel="stylesheet" type="text/css" media="screen,print" href="css/aps.css" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <script src="js/jquery/jquery-1.6.1.min.js" type="text/javascript"></script>
    <script src="js/apstemplate.js" type="text/javascript"></script>
    <script src="js/gallery.js" type="text/javascript"></script>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="css/schedule.css" />
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>


    <!--[if lt IE 8]><link rel='stylesheet' type='text/css' media='screen,print' href='Home_files/HomeIE.css'/><![endif]-->
    <!--[if gte IE 8]><link rel='stylesheet' type='text/css' media='screen,print' href='Media/IE8.css'/><![endif]-->
  </head>

  <body>
    <div style="text-align: center; ">
      <div id="body_content">
        <div  id="navbar"> </div>
         <?php include('Snippets/logo_layer.php') ?>

        <div id="content_body"  style="margin-left: 0px; position: relative;  z-index: 10; ">

          <div id="slideshow_buttons">
            <h1 title ="Hover over image to pause slideshow; click on image to see full size">Pictures of our beautiful campus</h1>
            <!--  not yet used
                <button id="2009_button" class="dir_select">2009</button>
                <button id="2010_button" class="dir_select">2010</button>
                <button id="2011_button" class="dir_select">2011</button>
                <button id="2012_button" class="dir_select">2012</button>
             </div>
            -->
            <div id="import2009" class ="frame_wrapper">
              <iframe id="slide_iframe" src="Standard/slideshow.html?year=Pearson"></iframe>
            </div>
          </div>


        </div>
      </div>
    </div>
  </body>

</html>