<?php

// $day = date("l");
<<<<<<< Updated upstream

<<<<<<< Updated upstream
if ($day == "Monday") {
    echo "Today is Monday, complete your assignment.";
} 
elseif ($day == "Tuesday") {
    echo "Today is Tuesday, practice coding.";
} 
elseif ($day == "Wednesday") {
    echo "Today is Wednesday, Take a nap.";
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


// 1. Student Data (Associative Array)
$student = [
    "name" => "John",
    "marks" => [80, 80, 80] // Total 240 ban’ne ke liye marks
];

// 2. Calculations
$total = array_sum($student['marks']);
$average = $total / count($student['marks']);

// 3. Grade Logic
if ($average >= 80) {
    $grade = "A";
} elseif ($average >= 70) {
    $grade = "B";
} else {
    $grade = "C";
>>>>>>> Stashed changes
}

// 4. Output 
echo "Name: " . $student['name'] . "<br>";
echo "Total: " . $total . "<br>";
echo "Average: " . $average . "<br>";
echo "Grade: " . $grade . "<br>";


$inventory = [
    ["name" => "Mobile phones", "price" => 50000],
    ["name" => "Machines", "price" => 120000],
    ["name" => "Laptops", "price" => 85000]
];

echo "<h3>Product Inventory:</h3>";
foreach ($inventory as $product) {
    echo "Product: " . $product['name'] . " - Price: " . $product['price'] . "<br>";
}

?>
