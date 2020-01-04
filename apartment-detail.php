<?php
require_once 'autoloader.php';

$apartment = Apartment::getApartmentById($_GET['id']);
$images = $apartment->getImages();
$alts = $apartment->getImageDescriptions();

echo "<p>$apartment->getSlogan()</p>";
echo "<p>$apartment->getDescription()</p>";

for($i = 0; sizeof($images); $i++){
    $img =new Image($images[$i],$alts[$i]);
    $img->render();
}