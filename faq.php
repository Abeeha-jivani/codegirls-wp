<?php
$faqs = [
    "What is PHP?" => "PHP is a server-side scripting language.",
    "Is PHP easy to learn?" => "Yes, it is beginner friendly.",
    "Can PHP connect to database?" => "Yes, especially with MySQL."
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>FAQ</title>
    <style>
        body {
            font-family: Arial;
            background: #fffaf0;
        }
        .faq-container {
            width: 70%;
            margin: 30px auto;
        }
        .faq-item {
            background: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 0 5px gray;
        }
    </style>
</head>
<body>

<div class="faq-container">
    <h2>Frequently Asked Questions</h2>

    <?php
    foreach ($faqs as $question => $answer) {
        echo "<div class='faq-item'>";
        echo "<h4>$question</h4>";
        echo "<p>$answer</p>";
        echo "</div>";
    }
    ?>

</div>

</body>
</html>
