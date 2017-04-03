<?php

/**
 * Fibonacci Series
 *
 */

class fibonacciSeries {

  //max value
  public $mv;

  public function __construct( $mv ) {

    $this->mv = $mv;

  }

  public function createSeries() {

    $a = 0;
    $b = 1;

    while($b <= $this->mv) {
      $result[] = $b;
      $temp = $a + $b;
      $a = $b;
      $b = $temp;
    }
    return $result;
  }

  public function odd($var) {

    // returns whether the input integer is odd
    return($var & 1);
  }

  public function even($var) {

    // returns whether the input integer is even
    return(!($var & 1));
  }

  public function filterSeries($var = 'all') {

    // check the variable for odd or even
    if($var <> 'all') {
      return array_filter( $this->createSeries(), [$this, $var] );
    }
    else {
      return $this->createSeries();
    }

  }


}

$fibonacci = new fibonacciSeries(40);

print_r($fibonacci->filterSeries(even));
