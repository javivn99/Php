<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
$a = $_REQUEST['num'];
$b = $_REQUEST['text'];

printf("%'*12.2f euros", $a);
echo '<br>';
echo strtoupper(substr(nl2br($b),0,10)).strtolower((substr(nl2br($b),10)));
?>