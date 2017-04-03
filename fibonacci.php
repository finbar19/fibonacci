<?php
/**
 * fibonacci sequence
 *
 */

function fibonacci($n) {
  $a = 0;
  $b = 1;
  //$result = array();

  while($b <= $n) {
    $result[] = $b;
    $temp = $a + $b;
    $a = $b;
    $b = $temp;
  }
  return $result;
}

function odd($var)
{
    // returns whether the input integer is odd
    return($var & 1);
}

function even($var)
{
    // returns whether the input integer is even
    return(!($var & 1));
}

/* Function call to print Fibonacci series upto the nth value */

$fib = fibonacci(4000000);

echo "Fibonacci series: ";
print_r($fib);
echo "<br/><br/>";
$odd = odd($fib);
echo "Odd values: ";
print_r(array_filter($fib, "odd"));
echo "<br/><br/>";
echo "Even values: ";
print_r(array_filter($fib, "even"));


?>
