﻿<?php
// =========================================================
//  Print all current list of arrays
// =========================================================
require("aionAPI.php"); 
$user = new aionProfile( "Yumi", "Marchutan" ); 
$data = $user->userData(); 
print_r($data); 
?> 