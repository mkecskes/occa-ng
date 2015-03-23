<?php
$date = new DateTime(getCurrDate());
$yesterday = clone $date;
$yesterday->modify("-1 day");
$tomorrow = clone $date;
$tomorrow->modify("+1 day");
echo"<div id=\"navbar\"><p id=\"prevdate\"><a href=\"?date=".$yesterday->format("Y-m-d")."\">◀</a></p><p id=\"nextdate\"><a href=\"?date=".$tomorrow->format("Y-m-d")."\">▶</a></p><p id=\"curdate\">".$date->format("Y.m.d.")."</p></div>";
?>