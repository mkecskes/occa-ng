<?php
$date = getCurrDate();
foreach(dailyMenu($db, $date) as $currMenu)
{
	echo "<div class=\"menuitem\"><h3><a href=\"{$currMenu[0]->url}\">{$currMenu[0]->name}</a></h3>";
	foreach($currMenu as $currVariant)
    {
        echo
            "<p><em>".
            ($currVariant->variant == "" ? "Menü " : $currVariant->variant . " ").
            "(".
            ($currVariant->price > 0 ? $currVariant->price : "?").
            " Ft)</em><br>".nl2br($currVariant->menu)."</p>";
    }
	echo "</div>";
}
?>