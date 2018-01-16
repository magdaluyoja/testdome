<?php 
//http://www.letsknowit.com/php-programming-questions
//Write a program to print Factorial of any number

//Hide Answer

$number = 6;                   /*number to get factorial */
$fact   = 1;
for($k=1;$k<=$number;++$k)    
{
  	$fact =  $fact*$k;
}
 // echo "Factorial of $number is ".$fact;

$first = 0;
$second = 1;
echo $first.'&nbsp;,';
echo $second.'&nbsp;,';


for($limit=0;$limit<10;$limit++)
{
 	$third = $first+$second;
 	echo $third.'&nbsp;,';;
 	$first = $second;
 	$second = $third;
}
