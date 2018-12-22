<?php

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $topic = test_input($_POST["topic"]);
    $detail = test_input($_POST["detail"]);
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "getpayed";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // prepare and bind

    $stmt = $conn->prepare("INSERT INTO forum_question (topic, detail, name, email) VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1, $topic, PDO::PARAM_STR);
    $stmt->bindParam(2, $detail, PDO::PARAM_STR);
    $stmt->bindParam(3, $name, PDO::PARAM_STR);
    $stmt->bindParam(4, $email, PDO::PARAM_STR);
    $stmt->execute();
    
    echo "Successful<BR>";
    echo "<a href=main_forum.php>View your topic</a>";
    
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

$conn = null;
?>