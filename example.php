<?php
include_once 'macgenerator.class.php';

$generator = new MACGenerator();

for ($i=0;$i<5;$i++)
	echo $generator->generateMAC()."\n";

unset($generator);
?>