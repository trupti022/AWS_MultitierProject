<?php
$servername = "RDS-ENDPOINT";
$username   = "DB_USERNAME";
$password   = "DB_PASSWORD";
$dbname     = "DB_NAME";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed");
}

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>AWS Multi-Tier App</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
        }
        .box {
            width: 60%;
            margin: 100px auto;
            background: #eee;
            padding: 30px;
            text-align: center;
        }
        input {
            width: 250px;
            padding: 6px;
            margin: 6px 0;
        }
        button {
            background: #5cb85c;
            color: white;
            border: none;
            padding: 6px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="box">
    <form method="post">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
