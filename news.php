<?php
$newsList = [
    "Website Launched Successfully",
    "New PHP Course Added",
    "Frontend Training Started"
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>News</title>
    <style>
        body {
            font-family: Arial;
            background: #f9f9f9;
        }
        .news-box {
            width: 60%;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }
        li {
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="news-box">
    <h2>Latest News</h2>
    <ul>
        <?php
        foreach ($newsList as $news) {
            echo "<li>$news</li>";
        }
        ?>
    </ul>
</div>

</body>
</html>
