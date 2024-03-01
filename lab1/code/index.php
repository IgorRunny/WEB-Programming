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

// task5
$MyNum = 233;
$Answer = $MyNum;
$Answer += 2;
$Answer *= 2;
$Answer -= 2;
$Answer /= 2;
$Answer -= $MyNum;
echo"$Answer \n";

// task6
$a=10;
$b=3;
echo $a % $b;
echo "\n";

if(0 === $a % $b){
    echo "divide\n";
}else{
    echo "not divide\n";
}

$st = pow(2, 10);
$qr = sqrt(245);
$t = [4, 2, 5, 19, 13, 0, 10];
$Character = 0;
foreach($t as $value){
    $Character += pow($value, 2);
}
$Character = sqrt($Character);

$Number0 = round(sqrt(349), 0);
$Number1 = round(sqrt(349), 1);
$Number2 = round(sqrt(349), 2);

$NumC = ceil(sqrt(587));
$NumF = floor(sqrt(587));
$Arr = [
    "ceil" => $NumC,
    "floor" => $NumF,
];

$Array = [4, -2, 5, 19, -130, 0, 10];
$Min = min($Array);
$Max = max($Array);

echo rand(1, 100);
echo "\n";
$ArrayOfRandNum = [];
for ($i = 0; $i < 10; $i++){
    $ArrayOfRandNum[$i] = rand(1, 100);
}

$a = 231;
$b = 233;
$Abs = abs($a - $b);

$ArrayOfNum = [1, 2, -1, -2, 3, -3];
foreach ($ArrayOfNum as $value){
    $value = abs($value);
}

$ControlNum = rand(1, 1000);
$i = 1;
$Arr = [];
while ($i <= $ControlNum){
    if(0 === $ControlNum % $i){
       $Arr[] = $i;
    }
    $i++;
}

$Arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$Ans = 0;
$Counter = 0;
foreach($Arr1 as $value){
    if($Ans > 10){
        break;
    }
    $Ans += $value;
    $Counter++;
}
