--TEST--
MongoDB\BSON\Javascript::__toString()
--FILE--
<?php

$js = new MongoDB\BSON\Javascript('function foo() { return 1; }');
var_dump((string) $js);

$js = new MongoDB\BSON\Javascript('function foo() { return bar; }', ['bar' => 1]);
var_dump((string) $js);
?>
--EXPECTF--
string(28) "function foo() { return 1; }"
string(30) "function foo() { return bar; }"
