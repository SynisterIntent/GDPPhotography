<head>
<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';</script>
</head>
<?php
require_once 'includes/Mobile_Detect.php';
require_once 'includes/adaptive-images.php';

$detect = new Mobile_Detect;
// Any mobile device (phones or tablets).


echo '<link href="./css/style.css" rel="stylesheet">';
include ('./functions/functions.php');
echo '<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet" type="text/css">';
placeHolder($detect);


?>