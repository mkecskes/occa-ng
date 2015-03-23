<?php
function getCurrDate()
{
     return $_GET["date"] ? $_GET["date"] : date("Y-m-d");
}