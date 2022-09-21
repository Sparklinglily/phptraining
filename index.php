<?php //declare(strict_types=1); // strict requirement
 echo "Hello World";
 echo "<br />";

 $number2= 300;
 $number1= 500;
 $number3= 700;
 $sum = $number1+$number2+$number3;

 echo $sum;




 $mycounter = 1;
 $myFirstName = "Aniekan";
 $myLastName = "Umoren";
 echo "<br />";
 echo $myFirstName." ".$myLastName;
 echo "<br />";

 $team = array("Livinus", "Prince", "Paul", "Chris", "Daniel", "Lizzy");
 echo $team[0]."<br />";
 echo $team[1]."<br />";

 $oxo= array
        (array("x", " ","o"),
        array("o", "o","x"),
        array("x", "o", " "));
        echo $oxo[2][0];
        echo "<br />";

        $count= 10;
        $messages= "This week $count people have viewed your profile.";
        $messages2 = 'This week $count people have viewed your profile.';
        echo $messages;

        echo "<br />";

        echo $messages2;

        echo "<br />";


        function  sum($num1, $num2) {
                $total= $num1 + $num2;
                return $total;
        }

      echo   sum(30, 40);


      echo "<br />";

      function longdate($timeStamp) {
              return date(" F jS Y", $timeStamp );
      }

      echo longdate(time());

      echo "<br />";



      $a= "1000";
      $b = "+1000";
      if ($a==$b) echo "1";

      if ($a===$b) echo "2";
      echo "<br />";

$bank_balance= 100;
$savings= 0;

      if ($bank_balance < 100) {
              $money = 1000;
              $bank_balance += $money;
      }

      elseif ($bank_balance > 200) {
              $savings += 100;
              $bank_balance= 100;
      }
         
      else {
               $savings += 50; 
               $bank_balance= 50;
      }

      echo $bank_balance;

      echo "<br />";

      echo $savings;

      echo "<br />";

      $grade= 70;
      if ($grade>=40 && $grade <=49){
              print "your grade is D";
      }
      else if($grade>=50 && $grade <=59){
              print "your grade is C";
      }
      else if($grade>=60 && $grade <=69){
              print "your grade is B";
      }
      else if($grade>=70 && $grade <=100){
              print "your grade is A";
      }
      else{

        print "Your grade is F, YOU Failed";
      }

      echo "<br />";


      //ternary operator

     
     $grade= 56;
     $grade==56? 
     "you have score C": "you need to work hard";

     echo $grade;
     echo "<br />";



  $fuel=  10;
  while ($fuel > 1){
          echo "There is enough fuel<br/>";
          $fuel-=1;
  }

  echo "there is no fuel, refill your tank";

  echo "<br />";
  echo "<br />";
  echo "<br />";

  //while loop

  
  $fuel=  10;
  while ($fuel > 1){
          echo "There is still fuel<br/>";


          $fuel-=1;
          if($fuel==3){
          echo "you are running out of fuel";
          break;
          }
  }
  echo "</br>";

  //do while loop

  //for loop

  //write a php programto find the avearag of even numbers from 1 to 1000.
  //print out all even nukmbere
  //print out the sum of the even numbers
  //print out the avearage of the even numbers


  $sum=0;
  $count=0;
   for($x=1; $x<=$number; $x++){

        $remainder = $x%2;
        if($remainder==0){
                global $sum;
                $sum+=$x;
                echo $x. "is an even number <br/>";

                $count+=1;
        }

   }

   echo "The sum of the even number is ".$sum. "<br />";
   echo $count. "<br/>";
   $average = $sum/($count-1);
   echo "the average is ". number_format($average,3);

  echo "</br>";
  echo "</br>";
  echo "</br>";

  //do while loop



  $count=1;
  do {
          echo "$count times 12 is" .$count*12.;
          echo "</br>";

  }
  while(++$count<=12);
  echo "</br>";


$count= 1;
do{
   echo "$count times 9 is" .$count*9;
   echo "</br>";    
}
while (++$count<=12);

echo "</br>";

//often used in arrays

$cars = Array("Benz", "Honda", "Volvo", "Camry", "Ford", "Lexus", "Hilux");


foreach($cars as $car ) {
        echo $car. "<br/>";

}

echo "</br>";

//fix name function

echo fix_names ("WILLIAM", "henry", "gatES");

function fix_names( $n1, $n2, $n3) {

        $n1 = ucfirst(strtolower($n1)); //upper character first
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));

        return $n1. " ".$n2. " ". $n3;
      
}

echo "</br>";


  //we iterate in an array using for each loop.(array as item)
  //we have index and associative arrays
  //associative arraays use item names instead of actual indexes.


   $paper[]= "copier";
   $paper[]= "Inkjet";
   $paper[]= "Laser";
   $paper[]= "Photo";

   for($j= 0; $j<4; $j++){
   echo "$j: $paper[$j]<br>";
   }


   echo "</br>";

   //associative array

   $students= Array( "Jacinta" => 20, "Yusuf"=> 19, "Gloria"=> 18, "Pascal"=>17, "Smith"=>19,"Honour"=> 22,  "Martins"=>18, "Kosi"=>19, "Prosper"=> 25, "Joke"=> 20, "Chris" => 19, "Laser"=> 20, "Jessica"=> 25);  


   foreach($students as $item => $description){
   echo "item: $description <br>";
}

echo "</br>";

function myTest2() {
        static $x = 3;
        echo $x. '<br/>';
       $x++; 
}

myTest2();
myTest2();
myTest2();


//a method is a function inside a class.

//var dump() and print_r are used for showing details of a function or array.

$x= "Hello world";
$x= null;
var_dump($students); //var_dump()

//reverse function

echo strrev("Carla Obinna Agha");

echo "</br>";


echo str_replace("WORLD", "LIZZY", "HELLO WORLD");// WHAT IM MLOOKING FOR IN THE STRIN G: WHAT I WANT TO REPLACE IT TO: AND THE STRING ITSELF.

echo "</br>";

$x =  5985;
var_dump(is_int($x));


$x =  59.85;
var_dump(is_int($x));

echo "</br>";



function setLength ($minlength = 100) {
echo "The length is : $minlength <br>";
}
setLength(350);
setLength(); // will use the default value of 50
setLength(135);
setLength(80);
echo "</br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


echo "</br>";
echo "</br>";
echo "</br>";

//date and time
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");


echo "</br>";

//timezone


date_default_timezone_set("Africa/Lagos");
echo "The time is " . date("h:i:sa");

echo "</br>";

//making time


$d=mktime(11, 14, 54, 8, 12, 2014);
echo $d;

echo "</br>";


echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo "</br>";
//string to time
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next friday");

echo "</br>";

//it coverts arrays to sttring

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);

echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";

$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);







?>

&copy; 2010-<?php echo date("Y");?>


