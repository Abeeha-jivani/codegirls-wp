<?php

echo "<h3>if-else / else-if:</h3>";
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
echo "&nbsp";
echo "<br>";

echo "<h3>array indexes:</h3>";
$cars=["mehran","ferrari","civic"];
echo $cars[1];
echo "<br>";
$bikes=["honda","yamaha","ktm"];
echo $bikes[1];


echo "<br>";
echo "<h3>array:</h3>";
$car=array(
    "mehran"=>array(
        "color"=>"red","model"=>"2015"
    )
);
print_r ($car);

echo "<h3>array in object:</h3>";
$mehran=["color"=>"red","model"=>"2015"];
$car=array(
    print_r ($mehran)
    // "mehran"=>$mehran
);


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
}

// 4. Output 
echo "<h3>array:</h3>";
echo "Name: " . $student['name'] . "<br>";
echo "Total: " . $total . "<br>";
echo "Average: " . $average . "<br>";
echo "Grade: " . $grade . "<br>";

// //product inventory
$inventory = [
    ["name" => "Mobile phones", "price" => 50000],
    ["name" => "Machines", "price" => 120000],
    ["name" => "Laptops", "price" => 85000]
];

echo "<h3>Product Inventory:</h3>";
foreach ($inventory as $product) {
    echo "Product: " . $product['name'] . " - Price: " . $product['price'] . "<br>";
}


//printing table with while loop
echo "<h3>While loop:</h3>";
$i = 1;
while ($i <= 10) {
    echo "10*" . $i . "=" . 10*$i . "<br>";
    $i++;
}

echo "<br>";

//printing table with for loop
echo "<h3>for loop:</h3>";
for( $i = 0; $i <= 10; $i++ ) {
    echo "10*" . $i . "=" . 10*$i . "<br>";
}

echo "<br>";

//printing table with do-while loop
echo "<h3>do-While loop:</h3>";
$i=1;
do {
    echo "10*" . $i . "=" . 10*$i . "<br>";
    $i++;
}
while ( $i <= 10);

echo "<br>";

//foreach loop
echo "<h3>foreach loop:</h3>";
$colors = ["Red", "Green", "Blue"];

foreach ($colors as $color) {
    echo "Color is $color <br>";
}

?>
