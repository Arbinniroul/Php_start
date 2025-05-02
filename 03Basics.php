<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
    <div class="container flex flex-col items-center justify-center bg-red-400 h-400 h-full py-10" >


      <?php 
      $var ="this is a string";
      $length=strlen($var);
      echo $var;
      echo "<br>";
      
      echo " The length of the string is ". $length ." lengths";
      echo "<br>";
      echo " The total number  of words  in the string is ". str_word_count($var) ." words";
      echo "<br>";

      echo " The  inverse of  the string is ". strrev($var);
      echo "<br>";

      echo "The replace of the string  is ".str_replace("is","at",$var);
    
      echo "<br>";
     
      function print_Number($num){
        echo "this is ".$num;

      }
      print_Number(12);
      print_Number(13);

       ?>
    </div>
</body>
</html>