﻿<?php
// =========================================================
//  Print all current list of arrays
// =========================================================
require("aionAPI.php"); 
$user = new aionProfile( "Yumi", "Israphel" ); 
$data = $user->userData(); 
print_r($data); 
?>
