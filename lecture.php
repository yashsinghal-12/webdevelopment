<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background: -webkit-radial-gradient(lef,rgb(128, 31, 31),rgb(204, 0, 255));
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: rgb(123, 118, 128);">


</form>
    
    <?php
    $num1 = 10;
    $num2 = 20;
    $sum = $num1 + $num2;
    echo("Addition of two numbers: ");
    print_r($sum);
    
    
    ?>
     <?php
  echo "<hr>";
  ?>
    <?php
  
  $input_array = array('a', 'b', 'c', 'd', 'e');
    
  print_r(array_chunk($input_array, 2));
    
  ?>
  <?php
  echo "<hr>";
  ?>
  <?php
  function combine_array($array1, $array2){
      return(array_combine($array1,$array2));
  }

      $array1 = array("Hondacity", "KIA", "MG");
      $array2 = array("1400000","1600000","1800000");
      print_r(combine_array($array1,$array2));
  

  ?>


    
    
</body>
</html>