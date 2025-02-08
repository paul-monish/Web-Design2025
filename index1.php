<?php
// echo "hello world";
// echo "hello"," ","world";
// print "Hello world1"; 
/*

*/
// $res=print("Hello world2");
// echo $res;//1

// $x=5;
// $y=10;
// $c=$x+$y;
// echo "Addition of ",$x," and ",$y," is: ",$c;

// Data Type
/*
1. String
2. Integer
3. Float
4. Boolean
5. Array
6. Object
7. NULL
8. Resource
*/

// $x=null;
// var_dump($x);

// $x='H|e|l|l|o|R|a|m';
// echo "Hello $x";
// echo strlen($x);
// echo str_word_count($x);
// echo strpos($x,"Ram");
// echo strtoupper($x);
// echo strtolower($x);
// echo str_replace("Ram","Sam",$x);
// echo $x;
// echo strrev($x);
// echo trim($x);
// echo "<br/>";
// echo $x;
// $arr= explode("|",$x);
// print_r($arr);

// $p="hello";
// $q="world";

// $z=$p ." ". $q;
// echo $z;
// echo "<br/>";
// $a="Hi, how are you?";
// echo substr($a,8,3);

// $x="hello";//Hello
// $firstLetter=substr($x,0,1);
// $leftLetters=substr($x,1);
// $upperFirstLetter=strtoupper($firstLetter);
// $lowerLeftLetters=strtolower($leftLetters);
// echo $upperFirstLetter.$lowerLeftLetters;


// $x="ram sen";//Ram Sen
// $arr=explode(" ",$x);
// $fName=$arr[0];
// $lName=$arr[1];
// echo strtoupper(substr($fName,0,1)).strtolower(substr($fName,1))." ".strtoupper(substr($lName,0,1)).strtolower(substr($lName,1));


// $x="Hello World";
// echo substr($x,-4,3);


// $str="we are used \$x variable in \"PHP\"";
// echo $str;

// $z=5.65;
// var_dump(is_int($z));

// echo is_int($z);
// echo PHP_INT_MIN;

// $a=5;
// var_dump($a);
// $a= (string) $a;
// var_dump($a);
// echo $_SERVER['REMOTE_ADDR'];

// function fun(){
//     return "Hello";
// }
// $res=fun();
// echo $res;
// //without parameter without return type
// function fun1(){
//     echo "Hello";
// }
// fun1();
// //with parameter with return type
// function fun2($a,$b){
//     return $a+$b;
// }
// $r=fun2(5,6);
// //without parameter with return type
// function fun3(){
//     return "Hello";
// }
// $r1=fun3();
// //with parameter without return type
// function fun4($a,$b){
//     echo $a+$b;
// }
// fun4(6,8);

//pass by value
// function increment($n){
//     $n++;
//     echo "Inside function:$n\n";//6
// }
// $n=5;
// increment($n);
// echo "Outside of the function:$n";//5

//pass by reference
function increment(&$n){
    $n++;
    echo "Inside function:$n\n";//6
}
$n=5;
increment($n);
echo "Outside of the function:$n";//6
?>
