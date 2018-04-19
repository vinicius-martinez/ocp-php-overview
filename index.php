<?php
echo "<h1>Openshift Workshop v2</h1> ";
echo "<h1>$_SERVER['SERVER_ADDR'] </h1>";
$ip = getenv('SICREDI', true) ?: getenv('SICREDI')
echo "<h1> $ip </h1>";
?>
