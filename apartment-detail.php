<?php
require_once 'autoloader.php';

$apartment = Apartment::getApartmentById($_GET['id']);
$images = new Image($apartment);
$alts = $apartment->getImageDescriptions();

echo "<p>".$apartment->getSlogan()."</p>";
echo "<p>".$apartment->getDescription()."</p>";

echo "<div>".$images->render()."</div>";