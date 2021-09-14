<?php
echo
print
printf("hello");
printf("%f",$var);
sprintf("%f",3.5);

echo "<br>";

$str1 = "Contribute Article on GeeksforGeeks";
echo metaphone($str1) . "\n";
echo "<br>";
  
$str2 = "A computer science portal";
echo metaphone($str2);

echo "<br>";

$str = 'Password';
$options = [
               'cost' => 10,
               'salt' => '$P27r06o9!nasda57b2M22'
           ];
             
echo sprintf("Result of crypt() on %s is %s\n", 
             $str, crypt($str, $options['salt']));
echo sprintf("Result of DEFAULT on %s is %s\n",
      $str, password_hash($str, PASSWORD_DEFAULT));
echo sprintf("Result of BCRYPT on %s is %s\n", $str, 
    password_hash($str, PASSWORD_BCRYPT, $options));

    
    ?>