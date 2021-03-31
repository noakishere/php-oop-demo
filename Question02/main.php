<?php 

/*
*
* Author: Kamyar Karimi
* Date: 30-03-2021
*
*/

include 'vehicle.php'; include 'aircraft.php'; include 'ship.php';
include 'cruiser.php'; include 'submarine.php'; 
include 'fighter.php'; include 'bomber.php';

$fighter1 = new Fighter("fighter object", "fighter_latitude", "fighter_longitude",
                        "fighter_heading");

$fighter1->deploy_weapon("FIGHTER_BOMB");

echo "<br/><br/><br/>";

$bomber1 = new Bomber("bomber object", "bomber_latitude", "bomber_longitude",
                     "bomber_heading");
$bomber1->deploy_weapon("BOMBER BOMB");

echo "<br/><br/><br/>";

$cruiser1 = new Cruiser("cruiser object", "cruiser_latitude", "cruiser_longitude",
                     "cruiser_heading");
$cruiser1->deploy_weapon("CRUISER BOMB");

echo "<br/><br/><br/>";

$submarine1 = new Submarine("submarine object", "submarine_latitude", "submarine_longitude",
                     "submarine_heading");
$submarine1->deploy_weapon("SUBMARINE BOMB");

echo "<br/><br/><br/>";
echo "old heading submarine {$submarine1->get_heading()} <br/>";
$submarine1->change_heading("new_heading");
echo "new heading submarine:  {$submarine1->get_heading()}";
?>