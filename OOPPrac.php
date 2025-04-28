<?php
// class Fruit{
//     public $name;
//     public $color;

//     function __construct(){
//         echo "called";
//     }

//     function set_name($name){
//         $this->name=$name;
//     }

//     function get_name(){
//         return $this->name;
//     }
// }

// $apple=new Fruit();

// $banana=new Fruit();
// $apple->set_name("apple");
// echo $apple->get_name();

// $banana->set_name("banana");
// echo $banana->get_name();

// var_dump($apple instanceof Fruit);


// class Fruit{
//     public $name;
//     public $color;

//     function __construct($name,$color){
//         $this->name=$name;
//         $this->color=$color;
//     }

//     function __destruct(){
//         echo "destruct";
//     }

//     function get_name(){
//         return $this->name;
//     }

//     function get_color(){
//         return $this->color;
//     }
// }

// $apple=new Fruit("apple","red");
// echo $apple->get_name();
// echo $apple->get_color();

// class Fruit{
//     public $name;
//     protected $color;
//     private $weight;
//     protected function set_name($name){
//                 $this->name=$name;
//             }
// }

// $mango=new Fruit();
// $mango->set_name('apple');
// $mango->name='Mango';
// $mango->color='yellow';
// $mango->weight='300';

// class Fruit{
//     public $name;
//     public $color;

//     public function __construct($name,$color){
//         $this->name=$name;
//         $this->color=$color;
//     }

//     public function intro(){
//         echo "The fruit is {$this->name}";
//     }
// }

// class Strawberry extends Fruit{
//     public function message(){
//         echo "I am strawberry";
//     }
//     public function intro(){
//         echo "The fruit is {$this->name} under Strawberry";
//     }
// }

// $strawberry=new Strawberry("Strawberry","red");
// $strawberry->message();
// $strawberry->intro();


class Goodbye{
    const LEAVING_MESSAGE="Thank you for visiting here";
}

echo Goodbye::LEAVING_MESSAGE;
?>