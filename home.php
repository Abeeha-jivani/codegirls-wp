<?php
$welcome = "Welcome to My PHP Website";
$today = date("l, d M Y");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: Arial;
            background: #f0f8ff;
            text-align: center;
        }
        .box {
            background: white;
            padding: 20px;
            width: 50%;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
    </style>
</head>
<body>

<div class="box">
    <h1><?php echo $welcome; ?></h1>
    <p>Today is: <?php echo $today; ?></p>
</div>

</body>
</html>
