<?php

$ROOT = realpath(dirname(__FILE__)."/../");

#===============================================================================
# Enable debugging mode
#===============================================================================
BigPipe\BigPipe::debugging(FALSE);

#===============================================================================
# Pagelet: LeftBar
#===============================================================================
$LeftBar = new BigPipe\Pagelet('leftbar');

$content = file_get_contents('C:/wamp/www/BigPipe/BigPipe/static/pagelets/leftbar/leftbar.html', FILE_USE_INCLUDE_PATH);
$LeftBar->addHTML($content);
$LeftBar->addCSS('/bigPipe/BigPipe/static/pagelets/leftbar/leftbar.css.php');


#===============================================================================
# Pagelet: MiddleBar
#===============================================================================
$MiddleBar = new BigPipe\Pagelet('content', BigPipe\Pagelet::PRIORITY_HIGH);

$content = file_get_contents('C:/wamp/www/BigPipe/BigPipe/static/pagelets/content/content.html', FILE_USE_INCLUDE_PATH);
$MiddleBar->addHTML($content);
$MiddleBar->addCSS('/bigPipe/BigPipe/static/pagelets/content/content.css.php');


#===============================================================================
# Pagelet: RightBar
#===============================================================================
$RightBar = new BigPipe\Pagelet('rightbar', BigPipe\Pagelet::PRIORITY_HIGH);

$content = file_get_contents('C:/wamp/www/BigPipe/BigPipe/static/pagelets/rightbar/rightbar.html', FILE_USE_INCLUDE_PATH);
$RightBar->addHTML($content);
$RightBar->addCSS('/bigPipe/BigPipe/static/pagelets/rightbar/rightbar.css.php');


?>
