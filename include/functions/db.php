<?php
function dbConn($host, $dbname, $user, $pass)
{
    return new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $user, $pass);
}

function dailyMenu($db, $date)
{
    $st = $db->prepare(
       "SELECT occa_restaurants.id, occa_restaurants.name AS name, occa_restaurants.url, occa_variants.name AS variant, occa_variants.price, occa_menus.menu
	   FROM occa_menus
	       INNER JOIN occa_variants ON occa_menus.variant_id = occa_variants.id
	       INNER JOIN occa_restaurants ON occa_variants.rest_id = occa_restaurants.id
	   WHERE date=?
	   ORDER BY name");

    $st->execute(array($date));
    return $st->fetchAll(PDO::FETCH_OBJ|PDO::FETCH_GROUP);
}
?>
