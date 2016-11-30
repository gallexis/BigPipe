<?php

$ROOT = "/BigPipe-master";

#===============================================================================
# Enable debugging mode
#===============================================================================
BigPipe\BigPipe::debugging(TRUE);

#===============================================================================
# Pagelet: LeftBar
#===============================================================================
$LeftBar = new BigPipe\Pagelet('leftBar');

$content = file_get_contents($ROOT.'/static/pagelets/leftbar/leftbar.html', FILE_USE_INCLUDE_PATH);

$LeftBar->addHTML($content);
$LeftBar->addCSS($ROOT.'/static/pagelets/leftbar/leftbar.css.php');

#===============================================================================
# Pagelet: MiddleBar
#===============================================================================
$MiddleBar = new BigPipe\Pagelet('middleBar', BigPipe\Pagelet::PRIORITY_HIGH);

$content = file_get_contents($ROOT.'/static/pagelets/middlebar/middlebar.html', FILE_USE_INCLUDE_PATH);

$MiddleBar->addHTML($content);
$MiddleBar->addCSS($ROOT.'/static/pagelets/middlebar/middlebar.css.php');

#===============================================================================
# Pagelet: RightBar
#===============================================================================
$RightBar = new BigPipe\Pagelet('rightbar', BigPipe\Pagelet::PRIORITY_HIGH);

$content = file_get_contents($ROOT.'/static/pagelets/rightbar/rightbar.html', FILE_USE_INCLUDE_PATH);

$RightBar->addHTML($content);
$RightBar->addCSS($ROOT.'/static/pagelets/rightbar/rightbar.css.php');


?>