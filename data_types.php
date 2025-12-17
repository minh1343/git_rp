<?php 
/**
 * PHP Data types
 * 
 * 
 * 1. Number.
 *  - Int: 1; 2 ; -1; -99
 *  - Float: 1.232; 
 *   
 */

var_dump(PHP_INT_MAX + 1 );
var_dump(PHP_FLOAT_MAX ); 

var_dump(-99);
var_dump((float) -99); // int to float
var_dump((boolean) 1); // int to boolean
var_dump((boolean) 0); // 0 = false
var_dump((boolean) -99);  
var_dump((string) -99); // int to string
var_dump(1_999_999);
// Comparing Floats

$a = 1.23456789;
$b = 1.23456788;
$epsion = 0.00000001;

if(abs($a - $b) < $epsion){
    echo "a = b";
}


var_dump((int) 8.6); // float to int


/**
 * String
 */

var_dump("Hello wolrd!"); // Double quoted string
var_dump('Hello wolrd!'); // Signle quoted string 

$name = "Minh";

var_dump("$name say hello!"); // Single quoted can't

$poem = <<<POEM
    Buoc toi deo ngang bong xe ta
    Co cay chen la da chen hoa
                $name
POEM;

// heredoc


var_dump($poem);

var_dump((float) "hello"); // string to float
var_dump((float) "-9 helo"); // string to float


/**Array 
 * 
 * array(
    key  => value,
    key2 => value2,
    key3 => value3,
    ...
)

 */


var_dump(array(23 => 1 ,1 =>  23 ,3 => 3)); // create a array use function
var_dump([1, 2, 3]); //create a array use shorthand


/**
 * Key cua array chi co the la string hoac int. (Neu la cac kieu khac he thong tu chuyen doi ve string neu co the hoac bao loi)
 * Gia tri cua mang co the la bat cu kieu du lieu nao
 */


$arr = [
    "name" => 'Minh',
    "age" => 23,
    "nation" => "VN"
];

var_dump($arr);