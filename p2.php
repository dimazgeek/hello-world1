<?php
//declare variable, gets from form html 
$a = $_POST["num"];
$b = isset($_POST['test']) ;
$c = isset($_POST['test2']) ;

// make a function for scramble word
function getRandomWord($len = 3) {
    $word = array("car","cat","art","pop","and");
    shuffle($word);
    return substr(implode($word), 0, $len);
}
function getRandomWord1($len = 4) {
    $word = array("jane","dave","mike","john","andi");
    shuffle($word);
    return substr(implode($word), 0, $len);
}
function getRandomWord2($len = 5) {
    $word = array("table","mixer","music","beats","drums");
    shuffle($word);
    return substr(implode($word), 0, $len);
}
//make a function for random number
function random(){
	$ran = rand(10,100);
	return $ran; 
}
//make a function for random char
function randomchar($length = 1){
	
    $char = '%#@*&^!@()<>?/}[]';
    $charactersLength = strlen($char);
    $randomStr = '';
    for ($i = 0; $i < $length; $i++) {
        $randomStr .= $char[rand(0, $charactersLength - 1)];
    }
    return $randomStr;
}
	 

//for ($i = 0; $i < 1; $i++) {
//    echo getRandomWord()."\n".getRandomWord1()."\n".getRandomWord2()."\n".random();
//}
// make condition when put number a password and checklist for add number or add characters
 for ($i = 0; $i < 1; $i++){
if($a == 1 && $b == false && $c == false){
    echo getRandomWord()."\n";	
}
elseif($a == 1 && $b == true && $c == false )
{
	
	echo getRandomWord()."\n".random();
}
elseif($a == 1 && $b == true && $c == true )
{
	
	echo getRandomWord()."\n".random().randomchar();
}
elseif($a == 2 && $b == false && $c == false)
{
	
	echo getRandomWord()."\n".getRandomWord1()."\n";
}
elseif($a == 2 && $b == true && $c == false)
{
	
	echo getRandomWord()."\n".getRandomWord1()."\n".random();
}
elseif($a == 2 && $b == true && $c == true)
{
	
	echo getRandomWord()."\n".getRandomWord1()."\n".random().randomchar();
}
elseif($a == 3 && $b == false && $c == false)
{
	
	echo getRandomWord()."\n".getRandomWord1()."\n".getRandomWord2()."\n";
}
elseif($a =3 && $b ==true && $c == false)
{
	
	echo getRandomWord()."\n".getRandomWord1()."\n".getRandomWord2()."\n".random();
}
elseif($a =3 && $b ==true && $c == true)
{
	
	echo getRandomWord()."\n".getRandomWord1()."\n".getRandomWord2()."\n".random().randomchar();
}
else{
	echo "wrong";
}
}





