<?php

$day = date("l");

if ($day == "Monday") {
    echo "Today is Monday, complete your assignment.";
} 
elseif ($day == "Tuesday") {
    echo "Today is Tuesday, practice coding.";
} 
elseif ($day == "Wednesday") {
    echo "Today is Wednesday, Take a nap.";
}
else {
    echo "Today is another day, do revision or take some rest.";
}
// echo "&nbsp";
echo "<br>";

// created an array1
$cars=["mehran","ferrari","civic"];
echo $cars[1];
echo "<br>";

// created an array2
$bikes=["honda","yamaha","ktm"];
echo $bikes[1];

// created an array in object
echo "<br>";
$car=array(
    "mehran"=>array(
        "color"=>"red","model"=>"2015"
    )
);
print_r ($car);

// created an array outside and then called it in object
$mehran=["color"=>"red","model"=>"2015"];
$car=array(
    // print_r ($mehran)
    "mehran"=>$mehran 
)

?>
