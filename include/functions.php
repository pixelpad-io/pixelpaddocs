<?php

namespace THEME;

$title = "Functions";
$summary = "PixelPAD2D has a section in the assets menu called <b>functions</b>. This section allows us to create
	functions that are available globally for the entire app and all of the scripts.
	Functions are also sometimes referred to as methods or commands.
	<br/><br/>
	To <b>create</b> a <b>function</b> simply press the <b>plus button (+)</b>. It will ask you to name it.
	The name can not contain spaces. Functions do not need a start or loop.
  Once you have programmed in your method, you can easily call it by it's name.";

Docs::renderSummaryTemplate($title, $summary, null, "functions");

$title = "Python Classes";
$summary = <<<EOT
  You may want to create your own Python classes, you can do 
  this by hijacking the functions script, and adding the class there. Since the functions script runs 
  prior to any other PixelPAD object, we can safely call any function class from within the start 
  or loop of a PixelPAD class.
EOT;
$img = null;

Docs::renderSummaryTemplate($title, $summary, $img, "classes");















