<?php
#===============================================================================
# Deactivate caching
#===============================================================================
header('Cache-Control: no-cache, no-store, must-revalidate');

#===============================================================================
# Include classes and functions
#===============================================================================
spl_autoload_register(function($classname) {
	$classpath = 'include/classes/%s.php';
	$classname = str_replace('\\', '/', $classname);

	require_once sprintf($classpath, $classname);
});

require_once 'include/functions.php';

#===============================================================================
# Check if BigPipe should be disabled
#===============================================================================
if(isset($_GET['bigpipe']) AND (int) $_GET['bigpipe'] === 0) {
	// You can also check for search spiders and disable the pipeline
	BigPipe\BigPipe::enablePipeline(FALSE);
}

// Outsourced to avoid duplicate code in index.php and async.php
require_once 'include/pagelets.php';
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
	<meta name="robots" content="noindex, nofollow" />
	<script>
		var globalExecution = function globalExecution(code) {
			window.execScript ? window.execScript(code) : window.eval.call(window, code);
		};
	</script>
	<script src="static/bigpipe.js"></script>
	<link href="static/style.css" rel="stylesheet" type="text/css" media="screen" />
	<title>BigPipe Demo</title>
</head>
<body>
<div id="menu-wrapper">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Homepage</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Photos</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Links</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<!-- end #menu --> 
</div>
<div id="banner"><a href="#"><img src="images/img01.jpg" width="1000" height="200" alt="" /></a></div>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Green<span>Exposure</span></a></h1>
		</div>
	</div>
</div>
<div id="wrapper"> 
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">

				<div id="leftbar">	
					<?php
						echo $LeftBar
					?>				
				</div>

				<div id="content">
					<?php
						echo $MiddleBar;
					?>					
				</div>	

				<div id="rightbar">
					<?php
						echo $RightBar;
					?>
				</div>

			</div>
		</div>
	</div>
	<!-- end #page --> 
</div>

<footer><strong>The footer of the page.</strong></footer>

<?php
BigPipe\BigPipe::render();
?>
</body>
</html>