<?php

// displays placholder for under construction.

Function placeHolder($detect){
$src='./images/logo.png';
echo '<img id="placeHolder" src="'.$src.'" />';
echo $detect->isMobile();
echo '<br>';
echo '<span id="coming">Coming Soon Please Check Back or <a href="mailto:info@gdp.photography?subject=Site Inquiry">Inquire Here</a></span>';
echo 'New stuff';
}


?>