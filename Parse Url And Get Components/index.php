<?php
//Youtube Embed[https://www.youtube.com/embed/VIDEO_ID]
$video="https://www.youtube.com/watch?v=dlfaPcF3i3I";
$parasedVideo=parse_url($video,PHP_URL_QUERY);
parse_str($parasedVideo,$arr);
echo '<iframe src="https://www.youtube.com/embed/'.$arr["v"].'"></iframe>';  