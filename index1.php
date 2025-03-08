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
// function increment(&$n){
//     $n++;
//     echo "Inside function:$n\n";//6
// }
// $n=5;
// increment($n);
// echo "Outside of the function:$n";//6


// $a=5;
// $a=(string)$a;
// $a=(float)$a;
// // $a=(bool)$a;
// // $a=array($a);
// // var_dump($a);
// // $a=(object)$a;
// $a=(unset)$a;
// print_r($a);

// echo gettype($a);


// echo(pi());
// echo(min(5,1,2));
// echo(max(5,1,3));
// echo(abs(-6.4));
// echo(sqrt(64));
// echo(round(0.60));
// echo(rand(10,100));

//
//     const SALUTATION1="MR.";

// const SALUTATION1="MR.";//
// // echo SALUTATION1;
// function test(){
//     // define('SALUTATION','MR.');
//     echo SALUTATION;
// }
// test();

// $a=5;
// $b=5;
// echo($a===$b?'true':'false');


// $a='hello' . 'world';
// echo $a;

// $a='hello';
// $a.='world';
// echo $a;

// $arr1=array("0"=>"a","1"=>"b");
// $arr2=array("2"=>"c","3"=>"d");
// $arr3=$arr1+$arr2;
// print_r($arr3);

// $a=NULL;
// $b=6;

// echo $a??$b;


// if(condition){

// }
// elseif(condition){

// }
// else{

// }

// if(condition){
//     if(condition){

//     }
// }


// $a=2;
// if($a%2===0){
//     $c=$a*5;
//     if($c>7){
//         echo "SOMETHING";
//     }
//     else{
//         echo "NOTHING";
//     }
// }
// else{
//     echo "odd";
// }


// switch(expression){
//     case '1':
//         //
//         break;
//     case '2':
//         //
//         break;
//     default:
//     //
// }

// $a=5;

// switch($a%2){
//     case 0:
//         echo "even";
//         break;
//     case 1:
//         echo "odd";
//         break;
// }


$name="Rajesh";

// $i=0;
// while($i<5){
//     echo $name."<br/>";
//     $i++;
// }

// $i=0;
// do{
//     echo "$name<br/>";
//     $i++;
// }while($i>5);

// for($i=0;$i<5;$i++){
//     echo "$name<br/>";
// }

// for($i=0;$i<5;$i++){
//     echo $i."<br/>";
//     if($i==4) break;
// }

// for($i=0;$i<5;$i++){
//     if($i==3) continue;
//     echo $i."<br/>";
// }


// $arr=array(1,2,3,4,6,8,9);
// $len=count($arr);
// echo $len;
// for($i=0;$i<$len;$i++){
//     echo $arr[$i]."<br/>";
// }
// foreach($arr as $e){
//     echo $e."<br/>";
// }

// echo $arr[3];

// $arr=array(
//     "name"=>"Rajesh Manna",
//     "Roll"=>54,
// );
// // echo $arr1["Roll"];

// foreach($arr as $key=>$val){
//     echo $key." ".$val."<br/>";
// }

// $arr=array(
//     array(1,2,3),
//     array(4,5,6),
//     array(7,8,9),
// );
// echo $arr[1][1];

// $arr=array(
//     "1st"=>array(1,2,3),
//     "2nd"=>array(4,5,6),
//     "3rd"=>array(7,8,9),
// );
// // echo $arr["2nd"][1];

// foreach($arr as $key=>$val){
//     foreach($val as $v){
//         echo $v." ";
//     }
//     echo "<br/>";
// }

// $arr=array("a","c","e","b");
// sort($arr);
// rsort($arr);

// $arr=array("4"=>"b","1"=>"a","3"=>"d","2"=>"c");
// asort($arr);
// arsort($arr);
// krsort($arr);
// print_r($arr);

// $arr=array(
//     "1st"=>array("1"=>1,"2"=>2,"3"=>3),
//     "2nd"=>array("4"=>4,"5"=>5,"6"=>6),
//     "3rd"=>array("7"=>7,"8"=>8,"9"=>9),
// );
// echo $arr["2nd"]["5"];

// $arr=array(
//     array("1"=>1,"2"=>2,"3"=>3),
//     array("4"=>4,"5"=>5,"6"=>6),
//     array("7"=>7,"8"=>8,"9"=>9),
// );
// echo $arr[1]["5"];

// $arr=array(8,-2,4,0,5,1,2);
// array_push($arr,7,5);
// array_pop($arr);
// array_shift($arr);
// array_unshift($arr,9);

// function change1($v){
//     return $v*2;
// }
// $new_arr=array_map("change1",$arr);
// print_r($new_arr);

// $arr=array("4"=>"b","1"=>"a","3"=>"d","2"=>"c");
// $keys=array_keys($arr);
// $values=array_values($arr);
// print_r($keys);
// print_r($values);

// function bSort(&$arr){
//     $n=count($arr);
//     for($i=$n-1;$i>=0;$i--){
//         for($j=0;$j<$i-1;$j++){
//             if($arr[$j]>$arr[$j+1]){
//                 $temp=$arr[$j+1];
//                 $arr[$j+1]=$arr[$j];
//                 $arr[$j]=$temp;
//             }
//         }
//     }
// }
// bSort($arr);
// print_r($arr);

//super-global variable
// $_POST,$_GET,$_REQUEST,$_SESSION,$_COOKIE,$_FILES,$GLOBALS


$x=5;//$GLOBALS['x']=5;
$y=6;//$GLOBALS['y']=6;

// function add($a,$b){
//     $c=$a+$b;
//     // echo $c;
//     return $c;
// }

function add(){
    $z=$GLOBALS['x']+$GLOBALS['y'];
    echo $z;
}
// $z= add($x,$y);
add();
// echo $z;

?>
