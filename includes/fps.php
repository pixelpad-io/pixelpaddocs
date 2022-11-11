<?php

namespace THEME;

$title = "get_fps()";
$summary = "PixelPAD should be running at 60 frames per second. If you have too many objects iny our game, sometimes it may cause frames to drop,
you can use get_fps() to see how quickly the game is running.";

Docs::renderSummaryTemplate($title, $summary, null, "get_fps");
