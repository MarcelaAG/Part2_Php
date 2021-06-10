<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 2 PHP</title>
</head>
<body>
<h2>//Part 2 ex1</h2>
    <?php
    for ($ruki = 0; $ruki <=10; $ruki ++){
      echo "Look at this beautiful number: $ruki <br>" ;
    }
    ?>

<h2>//Part 2 ex2</h2>
    <?php
    $number2 = rand(0,100);
   for($number1 = 1; $number1 <=20; $number1 ++){
       echo $number1*$number2;
   }
    ?>
  <h2>//Part 2 ex3</h2>
    <?php
      for ($yikes = 1; $yikes <=15; $yikes++){
        echo 'almost there ';
      } 
    ?>
  <h2>//Part 2 ex4</h2>
    <?php
      $xman = 1;
      while($xman <= 100) {
        echo "The number is: $xman <br>";
        $xman+=15;
      }
    ?> 
<h2>//Part 2 ex5</h2>
    <?php
    $suki = 200;
    while($suki >=0){
      echo $suki -=12 ;
    }
    ?>
     <h2>Bonus</h2>
<form>
    <select>
    <option selected="selected">Choose a month</option>
    <?php
        $months= array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        foreach ($months as $month) {
            ?>
                <option value="value"><?= $month?></option>
            <?php
        };
    ?>
      </select>
      <?php
echo 'boolval of Marcela is cool: '.(boolval('')? 'true' : 'false');
?>
</body>
</html>