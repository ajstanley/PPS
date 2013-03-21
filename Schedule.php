
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Pacific Paddling Symposium - Schedule</title>

    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <script src="js/jquery/jquery-1.6.1.min.js" type="text/javascript"></script>
    <script src="js/apstemplate.js" type="text/javascript"></script>
    <script src="js/schedule.js" type="text/javascript"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="css/schedule.css" />
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
        <h2 style="text-align:center">We are still finalizing the schedule, so it is subject to change!</h2>
        <div id="discipline_buttons" class="display_buttons">
          <button style="color:white; background-color:#5c92e0; font-weight:bold;"target="all" class="session_select">All Venues</button>
          <button target="land" class="session_select">Terra Firma</button>
          <button target="pool" class="session_select">Pool</button>
          <button target="water" class="session_select">Open Water</button>
          <button target="tour" class="session_select">Touring</button>
        </div>
        <div id="skill_buttons" class="display_buttons">
          <button style="color:white; background-color:#5c92e0; font-weight:bold;"target="intermediate" class="skill_select">All Levels</button>
          <button target="novice" class="skill_select">Novice</button>
          <button target="intermediate" class="skill_select">Intermediate</button>
          <button target="advanced" class="skill_select">Advanced</button>
        </div>

        <div style="margin-left: 0px; position: relative; padding:2%; " id="body_layer">
          <div id="tabs" style ="padding:0; margin:2">
            <ul>
              <li class="day_select"><a href="#tabs-all">All&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
              <li class="day_select"><a href="#tabs-fri">Friday</a></li>
              <li class="day_select"><a href="#tabs-sat">Saturday</a></li>
              <li class="day_select"><a href="#tabs-sun">Sunday</a></li>

            </ul>
            <div id="tabs-all">
              <h2>Friday Night</h2>
              <?php include('ScheduleSnippets/Friday.php'); ?>
              <h2>Saturday</h2>
              <?php include('ScheduleSnippets/Saturday.php'); ?>
              <h2>Sunday</h2>
              <?php include('ScheduleSnippets/Sunday.php'); ?>
            </div>
            <div id="tabs-fri"> <?php include('ScheduleSnippets/Friday.php'); ?></div>
            <div id="tabs-sat"> <?php include('ScheduleSnippets/Saturday.php'); ?></div>
            <div id="tabs-sun"><?php include('ScheduleSnippets/Sunday.php'); ?></div>


          </div>
        </div>
      </div>
    </div>
  </body>
</html>


