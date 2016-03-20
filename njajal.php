<?php
require_once 'settings/configuration.php';

$xxx = $mdy -> getMenuSub ( 2 );
$count = $xxx->num_rows;
$xxx -> fetch_object();
var_dump($xxx);
echo '<br>' . $count . '<br>';
print_r($xxx);