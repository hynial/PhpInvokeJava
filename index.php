<?php
define("JAVA_HOSTS", "127.0.0.1:8080");
require_once("Java.inc");
$tf = new Java('HelloWorld');
echo $tf->outPut();
$list = $tf->al("abc1234123413你好24");
echo "<br />";
foreach($list as $l){
	echo $l."<br />";
}

