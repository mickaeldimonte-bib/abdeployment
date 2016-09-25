<?php

$host= gethostname();
$ip = gethostbyname($host);

echo "Version 1 / ";
echo "container '" . $host . "' (" . $ip . ")";

?>