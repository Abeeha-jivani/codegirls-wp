<?php
$response = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $message = $_POST["message"];
    $response = "Thank you $username, your message has been received!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <style>
        body {
            font-family: Arial;
            background: #e6ffe6;
            text-align: center;
        }
        form {
            margin-top: 30px;
        }
        input, textarea {
            padding: 8px;
            margin: 5px;
            width: 250px;
        }
        button {
            padding: 8px 15px;
            background: green;
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>Contact Form</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Enter Name" required><br>
    <textarea name="message" placeholder="Enter Message" required></textarea><br>
    <button type="submit">Send</button>
</form>

<p><?php echo $response; ?></p>

</body>
</html>
