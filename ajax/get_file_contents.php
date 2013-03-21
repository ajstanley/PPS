<?php

$files = scandir('../images/' . $_GET['dir']);
$clean = array();
foreach($files as $file){
  if($file[0] != '.'){
    $clean[] = $file;
  }
}
$results['files'] = $clean;
$json = json_encode($results);

echo $json;
?>
