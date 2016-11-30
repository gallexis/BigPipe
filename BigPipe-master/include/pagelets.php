<?php

$ROOT = realpath(dirname(__FILE__)."/../");

#===============================================================================
# Enable debugging mode
#===============================================================================
BigPipe\BigPipe::debugging(TRUE);

#===============================================================================
# Pagelet: LeftBar
#===============================================================================
$LeftBar = new BigPipe\Pagelet('leftbar');

$content = file_get_contents($ROOT.'/static/pagelets/leftbar/leftbar.html', FILE_USE_INCLUDE_PATH);
$LeftBar->addHTML($content);
$LeftBar->addCSS('/BigPipe-master/static/pagelets/leftbar/leftbar.css.php');


#===============================================================================
# Pagelet: MiddleBar
#===============================================================================
$MiddleBar = new BigPipe\Pagelet('content', BigPipe\Pagelet::PRIORITY_HIGH);

$content = file_get_contents($ROOT.'/static/pagelets/content/content.html', FILE_USE_INCLUDE_PATH);
$MiddleBar->addHTML($content);
$MiddleBar->addCSS('/BigPipe-master/static/pagelets/content/content.css.php');


#===============================================================================
# Pagelet: RightBar
#===============================================================================
$RightBar = new BigPipe\Pagelet('rightbar', BigPipe\Pagelet::PRIORITY_HIGH);

$content = file_get_contents($ROOT.'/static/pagelets/rightbar/rightbar.html', FILE_USE_INCLUDE_PATH);
$RightBar->addHTML($content);
$RightBar->addCSS('/BigPipe-master/static/pagelets/rightbar/rightbar.css.php');


?>