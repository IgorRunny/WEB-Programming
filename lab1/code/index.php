<?php
// task1
$very_bad_unclear_name = "15 chicken wings";

$order = & $very_bad_unclear_name;
$order .= ", but have some new letters";

echo "\nYour order is: $very_bad_unclear_name.\n";

// task2
$AnyInt = 52;
echo $AnyInt;
echo "\n";

$AnyFloat = 3.14;
echo $AnyFloat;
echo "\n";

echo $AnyInt / 4 - 1;
echo "\n";

$LastMonth = 1187.23;
$ThisMonth = 1089.98;
echo "last month I spent more on: ". $LastMonth - $ThisMonth;
echo "\n";

// task3
$NumLanguages = 4;
$Month = 11;
$Days = $Month * 16;
$DaysPerLanguage = $Days / $NumLanguages;
echo "On average each language was studied: $DaysPerLanguage days\n";

// task4
echo 8**2;
echo"\n";