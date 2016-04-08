<?php 

$num = 1;

$ojb = new stdClass();
$ojb->num1 = 112;
$ojb->name = 'Hung';
$arr = (array)$ojb;
var_dump($arr["num{$num}"]);