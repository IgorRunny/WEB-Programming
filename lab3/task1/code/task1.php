<?php
echo "<pre>";

// task a
$regexpA = '/a..b/';
$matchesA = [];
$strA = 'ahb acb aeb aeeb adcb axeb';
preg_match_all($regexpA, $strA, $matchesA);
var_dump($matchesA)."\n";

//task b
$regexpB = '/[0-9]/';
$strB = 'a1b2c3';
$matchesB = [];
preg_match_all($regexpB, $strB, $matchesB);
var_dump($matchesB)."\n";

for($i = 0; $i < count($matchesB[0]); $i++){
    $regexpB1 = "/[{$matchesB[0][$i]}]/";
    $strB = preg_replace($regexpB1, pow($matchesB[0][$i], 3), $strB);
}
echo $strB."\n";