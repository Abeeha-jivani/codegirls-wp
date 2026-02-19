<?php

// $day = date("l");

<<<<<<< Updated upstream
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
=======
// if ($day == "Monday") {
//     echo "Today is Monday, complete your assignment.";
// } 
// elseif ($day == "Tuesday") {
//     echo "Today is Tuesday, practice coding.";
// } 
// elseif ($day == "Wednesday") {
//     echo "Today is Wednesday, Take a nap.";
// }
// else {
//     echo "Today is another day, do revision or take some rest.";
// }
// echo "&nbsp";
// echo "<br>";

// $cars=["mehran","ferrari","civic"];
// echo $cars[1];
// echo "<br>";
// $bikes=["honda","yamaha","ktm"];
// echo $bikes[1];


// echo "<br>";
// $car=array(
//     "mehran"=>array(
//         "color"=>"red","model"=>"2015"
//     )
// );
// print_r ($car);

// $mehran=["color"=>"red","model"=>"2015"];
// $car=array(
//     // print_r ($mehran)
//     "mehran"=>$mehran
// )

//printing grade with if-else statements
// $students=array(
//     "ali"=>array(
//         "maths"=>"60"
//     )
// );
// $marks=$students["ali"]["maths"];
// if($marks > 50 || $marks < 60){
//     echo "grade C!";
// }
// else if($marks > 60){
//     echo "grade B!";
// }
// else{
//     echo "fail";
// }

//printing loop
// $bikes=["honda","yamaha","ktm"];
// for($i= 0;$i<count($bikes);$i++){
//     echo $bikes[$i]."<br>";
// }


>>>>>>> Stashed changes
$car=array(
    "mehran"=>array(
        "color"=>"red","model"=>"2015"
    ),
    "city"=>array(
        "color"=> "pink","model"=> "2012"
    ),
    "ferrari"=>array(
        "color"=> "green","model"=> "2020"
    )
);
<<<<<<< Updated upstream
print_r ($car);

// created an array outside and then called it in object
$mehran=["color"=>"red","model"=>"2015"];
$car=array(
    // print_r ($mehran)
    "mehran"=>$mehran 
)
=======
>>>>>>> Stashed changes

foreach($car as $name => $details){
    echo $name . " - Model: " . $details['model'] . "<br>";
}
?>
