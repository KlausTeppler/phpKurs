<?php

/**
 * Using Scalar Data Types,
 * Able to define variables using:
 * Integers, boolean, doubles, Strings and null.
 * (PHP_EOL is a constant for the end of a line. So you can use the script in the Shell.)
 */

 /* Scalar are data types that has a single value.
    4 types in php:
    - Boolean
    - Integer
    - Float
    - String
 */

 /**
  *  Integers are whole numbers,
  *  + or - values,
  *  can hold Octal(base 8), Hexadecimal(base 16) and Binary(base 2) values,
  *  every plattform will have limited integer number to be defined
  *  Constant PHP_INT_SIZE shows the size of in Integer in bytes
  *  Constant PHP_INT_MAX show the max size of a positiv integer
  *  Constant PHP_INT_MIN show the max size of a positiv integer
  */

  echo'**********Size of an Integer in bytes******'.PHP_EOL;
  echo PHP_INT_SIZE.PHP_EOL;
  echo'**********MaxSize of an Integer************'.PHP_EOL;
  echo PHP_INT_MAX.PHP_EOL;
  echo'**********MinSize of an Integer************'.PHP_EOL;
  echo PHP_INT_MIN.PHP_EOL;

/**
 * Casting variables to integer.
 * Casting operater:
 * are used ny putting the name of the data type you want to cast into
 * brackets before the variable name. 
 * var_dump — Dumps information about a variable.
 * 
 */

 echo'*********StringToInt**********'.PHP_EOL;
 $value1 = '1234';
 $value1 = (int)$value1;
 echo $value1.PHP_EOL;
 var_dump($value1).PHP_EOL;

 echo'*********FloatToInt***********'.PHP_EOL;
 $value2 = 12.5678;
 $value2 = (int)$value2;
 echo $value2.PHP_EOL;
 var_dump($value2).PHP_EOL;

 echo'************HexNumbers********'.PHP_EOL;
 $Hex = 0x61E ; // 1566
 var_dump($Hex).PHP_EOL;
 $Hex = $Hex * 2;
 var_dump($Hex).PHP_EOL;
 

/**
  *  Data Type Float 
  *  are real numbers, have decimal points
  *  
  */

  echo'***********FloatingNumbers****'.PHP_EOL;
  $decNumber = 1.2345;
  var_dump($decNumber).PHP_EOL;

  echo'***********Rounding a Float to full number****'.PHP_EOL;
  $decNumber = round($decNumber);
  var_dump($decNumber).PHP_EOL;

  
  echo'***********Rounding a Float to full number****'.PHP_EOL;
  $decNumber = round($decNumber);
  var_dump($decNumber).PHP_EOL;

  /**
  *  Boolean Data Types 
  *  can be true or false,
  *  TRUE or FALSE can be used to assign a boolean variable,
  *  true = 1 and false = 0 
  *  
  *  
  */

  echo'***********Bool************************'.PHP_EOL;
  $boolVar=true;
  var_dump($boolVar).PHP_EOL;

  echo'***********IntergerToBool************************'.PHP_EOL;
  $IntVar=(bool)1;
  var_dump($IntVar).PHP_EOL;

  