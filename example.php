﻿<?php
require("aionAPI.php");
$user = new aionProfile( "Nig", "Azphel" ); // or aionProfile( "Nig", "Azphel", "na" )
$data = $user->userData();
echo $data['name'] . " has " . $data['total_kills'] . " kills and " . $data['abyss_points'] . " Abyss Points.";
?>