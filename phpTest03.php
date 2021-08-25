<?php
//問１
function kake($bai) {
    $result = $bai*2;
    return $result;
}
echo kake(100) . "\n";

//問2
function add($a, $b){
    $result = $a + $b;
    return $result;
}
echo add(2, 3) . "\n"

//問3
function kisu(){
    $arr = array(1, 3, 5, 7, 9);
    $result = array_product($arr);
    return $result;
}
echo kisu()

//問4

function max_array($arr) {
// とりあえず配列の最初の要素を1番大きい値とする
$max_number = $arr[0];
foreach($arr as $a) {
//どうしたらいいかわからない・・・・
if ($max_number < $a){
    $max_number = $a;}
}

return $max_number;
}

$arr = [3, 5, 2, 4, 1, 9, 7, 8];
echo max_array($arr);

//問5
//strip_tags
$text = '<p>Text</p>';
echo strip_tags($text);

//array_push
$stack = array("orange", "banana");
array_push($stack, "apple", "grape");
print_r($stack);

//array_merge
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array = array_merge($array1, $array2, $array3);
print_r($array);

//time, mktime
$time = mktime(0, 0, 0, 1, 1, 2020);
var_dump(date('Y年m月d日h時i分s秒', $time));
print('<br/>');

//date
date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s");

?>

