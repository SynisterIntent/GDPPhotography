<?php

// displays placholder for under construction.

Function placeHolder($detect){
$src;
if ( $detect->isMobile() ) {
 $src='./images/logo.png';
echo '<img id="placeHolder" src="'.$src.'" />';

} else { 
	$src='./images/logoMobile.png';
echo '<img id="Mobile" src="'.$src.'" />';

}
echo $detect->isMobile();
echo '<br>';
echo '<span id="coming">Coming Soon Please Check Back or <a href="mailto:info@gdp.photography?subject=Site Inquiry">Inquire Here</a></span>';
echo 'New stuf';
}


?>