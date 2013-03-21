<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Online Registration</title>

    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <script src="js/jquery/jquery-1.6.1.min.js" type="text/javascript"></script>
    <script src="js/apstemplate.js" type="text/javascript"></script>
    <script src="js/schedule.js" type="text/javascript"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />

    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" media="screen,print" href="css/aps.css" />
    <!--[if lt IE 8]><link rel='stylesheet' type='text/css' media='screen,print' href='Home_files/HomeIE.css'/><![endif]-->
    <!--[if gte IE 8]><link rel='stylesheet' type='text/css' media='screen,print' href='Media/IE8.css'/><![endif]-->
    <script>
      $(function() {
        $( "#tabs" ).tabs();
      });
    </script>
  </head>
  <body>
    <div style="text-align: center; ">
      <div id="body_content">
        <div  id="navbar"> </div>
        <?php include('Snippets/logo_layer.php') ?>
        <div style="position: relative;" id="body_layer">
          <div id="registration">
            <h1 style="text-align:center">REGISTRATION NOW OPEN!!</h1>
            <h1 style="text-align:center;"> <a title="Click it already!" href ="EarlyBird" >Check out the early bird draw!</a></h1>
            <div class="gap" />
            <div id="tabs" style ="padding:0; margin:2">
              <ul>
                <li><a href="#packages">Packages!</a></li>
                <li><a href="#register">Register!</a></li>
                <li><a href="#offsite">Offsite Accommodations</a></li>
                <li><a href="#policy">Cancellation Policy</a></li>
              </ul>
              <div id="packages"> <?php include('Snippets/packages.php'); ?></div>
              <div id="register">
                <script type="text/javascript" src="http://form.jotform.ca/jsform/30676533881259"></script>
              </div>
              <div id="policy"> <?php include('Snippets/CancellationPolicy.php'); ?></div>
              <div id="offsite"> <?php include('Snippets/offsite.php'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
