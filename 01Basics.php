<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   <div class="flex bg-red-500 py-10 px-10 h-full w-full flex items-center flex-col justify-center">
    <h1 class="text-xl font-medium">This is container</h1>
   <div>
   <?php echo "Hello World" ;
    define('PI',3.14);
$variable1 = 34;
$variable2 = 25;
echo "<br>";

echo $variable1++;
echo  "<br>";


echo ++$variable1;
echo  "<br>";

$var=11;
if($var<12)
{
    echo "It is less than 12";
}
else if($var==12){
    echo "It is 12";
}
else{
    echo "Hello world";
}

    ?>
   <?php 
//    String,
//    Integer,
//    Float,
//    Boolean,
// Array,
//Object
$var ="This is a string";
echo var_dump($var);
echo  "<br>";
$var =16;
echo var_dump($var);
echo  "<br>";
$var=14.23;
echo var_dump($var);
echo  "<br>";

echo PI;
echo  "<br>";

$languages=array("python","c++","php","Nodejs");



for ($a=0; $a <4 ; $a++) { 

 
    echo "<br>the value of a is ";
    echo $a;

    
}
foreach($languages as $value){
    echo "<br>The value is ";
    echo $value;

}
    ?>
   </div>
   </div>
</body>
</html>