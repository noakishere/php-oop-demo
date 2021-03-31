<?php

/*
*
* Author: Kamyar Karimi
* Date: 30-03-2021
*
*/


include 'asset.php'; 
include 'stock.php'; include 'bond.php'; include 'savings.php';

echo "<br/><br/><h1>Asset class</h1>";
$asset = new Asset("descriptorrr22", "25/25/2020", 1900);
echo "<br/> {$asset->get_descriptor()}";

echo "<br/><br/><h1>Stock class</h1>";
$newStock = new Stock("descriptorrr2", "25/25/202022", 1900, "helo", "helo", "helo");
echo "<br/> {$newStock->get_date()}";

echo "<br/><br/><h1>Bond class</h1>";
$newBond = new Bond("bond_descriptor", "25/25/25252", 2500, "2.4%", "bondAsset");
echo "<br/> {$newBond->get_descriptor()}";

echo "<br/><br/><h1>Savings class</h1>";
$newSavings = new Bond("savings_descriptor", "25/25/25252", 2500, "223.4%", "savingsAsset");
echo "<br/> {$newSavings->get_descriptor()}";
?>