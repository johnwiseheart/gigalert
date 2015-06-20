<?php
if(isset($_GET['l'])) {
  $loggedIn = $_GET['l'];
} else {
  $loggedIn = 0;
}

$currentFile = $_SERVER["PHP_SELF"];
$parts = Explode('/', $currentFile);
$dir = $parts[count($parts) - 2];
$file = $parts[count($parts) - 1];

if($file=="index.php") {
  if(($dir!="bands")||($dir!="user")) {
    $assets = "assets";
  } else {
    $assets = "../assets";
  }
} else {
  $assets = "../assets";
}
if($file=="splash.php") {
	$assets = "assets";
}


?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>GigAlert - The Concert Notifier</title>

  
  <link rel="stylesheet" href="<?php echo $assets; ?>/css/foundation.css" />
  <link rel="stylesheet" href="<?php echo $assets; ?>/css/general_foundicons.css">
  <link rel="stylesheet" href="<?php echo $assets; ?>/css/social_foundicons.css">
  <link rel="stylesheet" href="<?php echo $assets; ?>/css/accessibility_foundicons.css">
  <link rel="stylesheet" href="<?php echo $assets; ?>/css/gigalert.css">
  <link rel="stylesheet" href="<?php echo $assets; ?>/css/jquery-ui.css" />

  <link rel="icon" type="image/ico" href="<?php echo $assets; ?>/img/favicon.ico"/>

  <script src="<?php echo $assets; ?>/js/vendor/custom.modernizr.js"></script>
</head>