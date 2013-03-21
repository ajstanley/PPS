<?php
$target = "login";
$password = FALSE;
$confirmation = FALSE;

if (isset($_POST['target'])) {
  $target = $_POST['target'];
}
if (isset($_POST['password']) && trim($_POST['password']) != '') {
  $password = $_POST['password'];
}
if (isset($_POST['confirmation'])) {
  $confirmation = $_POST['confirmation'];
}
if($target == 'check'){
  $target = 'set_password';
  if($password){
    $target = 'check_password';
  }
}



$content = "SessionSnippets/$target.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>PPS Login</title>

    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <script src="js/apstemplate.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" media="screen,print" href="css/aps.css" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <script src="js/jquery/jquery-1.6.1.min.js" type="text/javascript"></script>
    <script src="js/apstemplate.js" type="text/javascript"></script>


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
<?php include($content) ?>

      </div>
    </div>
  </body>

</html>