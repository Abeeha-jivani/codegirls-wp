<?php
$name = "Abiha";
$course = "BSCS";
$isStudent = true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    <style>
        body {
            font-family: Arial;
            background: #fff0f5;
        }
        .card {
            width: 60%;
            margin: 40px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 8px gray;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>About Me</h2>
    <p>Name: <?php echo $name; ?></p>
    <p>Course: <?php echo $course; ?></p>

    <?php
    if ($isStudent) {
        echo "<p>Status: Currently Studying</p>";
    } else {
        echo "<p>Status: Graduate</p>";
    }
    ?>
</div>

</body>
</html>
