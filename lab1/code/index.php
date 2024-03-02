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

// task7
function PrintStringReturnNumber(){
    echo"Hello, world!\n";
    return strlen("Hello, world!");
}
$MyNum1 = PrintStringReturnNumber();
echo "$MyNum1\n";

// task8
function IncreaseEnthusiasm($Item){
    return "$Item". "!";
}
$String = "Random string";
echo IncreaseEnthusiasm($String). "\n";

function RepeatThreeTimes($Item){
    return "$Item". "$Item". "$Item";
}
echo RepeatThreeTimes($String). "\n";

echo IncreaseEnthusiasm(RepeatThreeTimes($String)). "\n";

function Cut($str, $NumOfSimbols = 10){
    return substr_replace($str, "", $NumOfSimbols, strlen($str) - $NumOfSimbols);
}
echo Cut($String, 3). "\n";

function PrintArray($arr, $i = 0){
    echo $arr[$i]. "\n";
    if(array_key_last($arr) > $i){
        PrintArray($arr, ++$i);
    }
}
PrintArray($Arr1);

function SumOfNumbers(int $num){
    $Out = 0;
    while($num != 0 ){
        $Out += $num % 10;
        $num = intdiv($num, 10);
    }
    if($Out >= 10){
        $Out = SumOfNumbers($Out);
    }
    return $Out;
}
echo SumOfNumbers(99991). "\n";

// task9
$Array9 = [];
for($i = 0; $i <= 10; $i++){
    $count = 0;
    $Array9[$i] = "x";
    while($count < $i){
        $Array9[$i] .= "x";
        $count++;
    }
}

function ArrayFill($item, int $amount){
    $Out = [];
    for($i = 0; $i < $amount; $i++){
        $Out[$i] = $item;
    }
    return $Out;
}

$Array91 = [[]];
for($i = 0; $i < 10; $i++){
    for($j = 0; $j < 10; $j++){
      $Array91[$i][$j] = rand(1, 10);
    }
}
$Out = 0;
for($i = 0; $i < array_key_last($Array91); $i++){
    for($j = 0; $j < array_key_last($Array91[$i]); $j++){
        $Out += $Array91[$i][$j];
    }
}
echo $Out. "\n";

$Array91 = [[]];
$count = 1;
for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        $Array91[$i][$j] = $count++;
    }
}

$Array92 = [2, 5, 3, 9];
$result = $Array92[0] * $Array92[1] + $Array92[2] * $Array92[3];
echo $result. "\n";

$user = [
    "name" => "Igor",
    "surname" => "Bolshakov",
    "patronymic" => "Romanovich"
];
echo "$user[surname] $user[name] $user[patronymic]\n";

$date = [
    "year" => 2024,
    "month" => 3,
    "day" => 2
];
echo "$date[year]-$date[month]-$date[day]\n";

$arr = ["a","b","c","d","e"];
echo array_key_last($arr) + 1, "\n";

echo $arr[array_key_last($arr)]. "\n";
echo $arr[array_key_last($arr) - 1]. "\n";

// task10
function More10 ($num1, $num2){
    if($num1 + $num2 > 10){
        return true;
    }
    return false;
}

function Ecual ($num1, $num2){
    if($num1 == $num2){
        return true;
    }
    return false;
}

$test = 3;
if($test == 0)
    echo true;

$age = rand(1, 100);
if($age < 10 || $age > 99){
    echo "age less 10 or more 99\n";
}else{
    if((($age % 10) + intdiv($age, 10)) <= 9){
        echo "the sum of the digits is one digits\n";
    }else
        echo "the sum of the digits is two digits\n";
}

$arr10 = [1,6,14,90,32,8];
if(array_key_last($arr10) + 1 == 3)
    echo $arr10[0] + $arr10[1] + $arr10[2]. "\n";

// task11
for($i = 1; $i <= 20; $i++){
    $count = 0;
    while($count++ < $i){
        echo "x";
    }
    echo "\n";
}

// task12
$arr12 = [1,6,14,90,32,8];
echo array_sum($arr12) / (array_key_last($arr12) + 1). "\n";

function Sum($out = 0, $i = 1)
{
    $out += $i;
    if(++$i <= 100){
        Sum($out, $i);
    }else{
        echo $out;
    }
}

$out = [];
$i = 0;
function St_qr_t($array, $out, $i){
    $out[$i] = sqrt($array[$i]);
    $i++;
    if($i <= array_key_last($array)){
        St_qr_t($array, $out, $i);
    }
}

function Massive($arr = [], $i = 1){
    $arr[chr($i + 96)] = $i;
    if($i + 96 < 122){
        Massive($arr, ++$i);
    }
}


function SumOfPair($String){
    $arr = str_split($String, 2);
    $Output = array_sum($arr);

}
$String = "1234567890";
SumOfPair($String);


