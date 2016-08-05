--TEST--
MongoDB\BSON\UTCDateTime::__set_state() (64-bit)
--FILE--
<?php
$tests = [
    0,
    -1416445411987,
    1416445411987,
];

foreach ($tests as $milliseconds) {
    var_export(MongoDB\BSON\UTCDateTime::__set_state([
        'milliseconds' => $milliseconds,
    ]));
    echo "\n\n";
}

?>
--EXPECT--
MongoDB\BSON\UTCDateTime::__set_state(array(
  'milliseconds' => 0,
))

MongoDB\BSON\UTCDateTime::__set_state(array(
  'milliseconds' => -1416445411987,
))

MongoDB\BSON\UTCDateTime::__set_state(array(
  'milliseconds' => 1416445411987,
))

