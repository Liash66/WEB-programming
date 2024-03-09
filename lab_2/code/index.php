<?php

/*Imagine a lot of code here*/
$very_bad_unclear_name = "15 chicken wings";

//Write your code here:
$order = &$very_bad_unclear_name;
$order .= " and a large soda";

//Don't change the line below
echo "\nYour order is: $very_bad_unclear_name";


$a = 220;
echo "\nVariable 1: $a";

$b = 6.9;
echo "\nVariable 1: $b";

echo "12";

$last_month = 1187.23;
$this_month = 1089.98;
$difference = $last_month - $this_month;
echo "\nDifference: $difference";


$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "\nDays per language: $days_per_language";


echo "\n" . 8**2;


$my_num = 230;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "\n $answer";


$a = 10;
$b = 3;
$c = $a % $b;
echo "$a % $b = $c";

if ($c == 0) {
    echo "\nДелится";
} else {
    echo "\nДелится с остатком $c";
}

$st = pow(2, 10);
echo "\n$st";
$k = sqrt(245);
echo "\n$k";
$mas = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($mas as $i)
{
    $sum += $i**2;
}
echo "\n" . sqrt($sum);

$k1 = round(sqrt(379));
echo "\n$k1";
$k2 = round(sqrt(379), 1);
echo "\n$k2";
$k3 = round(sqrt(379), 2);
echo "\n$k3";
$round_mas = [];
$round_mas["floor"] = floor(sqrt(579));
$round_mas["ceil"] = ceil(sqrt(579));
echo "\n" . $round_mas["floor"];
echo "\n" . $round_mas["ceil"];

$min_number = min(4, -2, 5, 19, -130, 0, 10);
$max_number = max(4, -2, 5, 19, -130, 0, 10);
echo "\n $min_number, $max_number";

echo "Random number: " . rand(1, 100);
$mas = [];
echo "\n";
foreach (range(0, 9) as $i)
{
    $mas[] = rand(1, 100);
    echo $mas[$i] . " ";
}

$a = 1;
$b = 2;
echo "\n" . abs($a - $b);
echo "\n" . abs($a - $b);
$mas = [1, 2, -1, -2, 3, -3];
foreach (range(0, count($mas) - 1) as $i) {
    if ($mas[$i] < 0)
    {
        $mas[$i] = abs($mas[$i]);
    }
    echo $mas[$i] . " ";
}

$a = 30;
$mas = [];
foreach (range(1, $a) as $i)
{
    if ($a % $i == 0)
    {
        $mas[] = $i;
    }
}
foreach ($mas as $i)
{
    echo $i . " ";
}

$mas = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$k = 0;
foreach ($mas as $i)
{
    $sum += $i;
    $k++;
    if ($sum > 10)
    {
        break;
    }
}
echo $k;


function printStringReturnNumber($str)
{
    echo $str;
    return intval($str);
}

$my_num = printStringReturnNumber("221");

echo $my_num;


function increaseEnthusiasm($str)
{
    return $str . "!";
}

echo "\n" . increaseEnthusiasm("Do it");

function repeatThreeTimes($str)
{
    return $str . $str . $str;
}

echo "\n" . repeatThreeTimes("go");

echo "\n" . increaseEnthusiasm(repeatThreeTimes("go"));

function cut($str, $k = 10)
{
    return substr($str, 0, $k);
}

echo "\n" . cut("qwertyuiopasdfg");

function printArrayRecursively($mas, $i = 0) {
    if ($i < count($mas)) {
        echo $mas[$i] . " ";
        printArrayRecursively($mas, $i + 1);
    }
}

$mas = [1, 2, 3, 4, 5];
echo "\n";
printArrayRecursively($mas);

function sumDigitsToOne($num) {
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num = (int)($num / 10);
    }
    if ($sum > 9) {
        return sumDigitsToOne($sum);
    } else {
        return $sum;
    }
}

$num = 98765;
$result = sumDigitsToOne($num);
echo "\n" . $result;