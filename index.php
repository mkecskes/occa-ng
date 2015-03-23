<?php
include("include/secrets.php");
include("include/functions/db.php");
include("include/functions/getdate.php");
$db = dbConn(DBHOST, DBNAME, DBUSER, DBPASS);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta charset="utf-8">
<title>Öccá v2</title>
<link rel="stylesheet" href="style/occa.css">
<link rel="icon" href="favicon.png">
</head>
<body>
<div id="content">
<?php include("include/content/calendar.php"); ?>
<?php include("include/content/dailymenu.php"); ?>
</div>
</body>
</html>