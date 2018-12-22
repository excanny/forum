<?php

// Start the session
session_start();
//$question_id = "";

$question_id =  $_SESSION['q_id']; //echo $question_id;  

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a_name = test_input($_POST["a_name"]);
    $a_email = test_input($_POST["a_email"]);
    $a_answer = test_input($_POST["a_answer"]);
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

    $stmt = $conn->prepare("INSERT INTO forum_answer (question_id, a_answer, a_name, a_email) VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1, $question_id, PDO::PARAM_INT);
    $stmt->bindParam(2, $a_answer, PDO::PARAM_STR);
    $stmt->bindParam(3, $a_name, PDO::PARAM_STR);
    $stmt->bindParam(4, $a_email, PDO::PARAM_STR);
    $stmt->execute();
    
    echo "Successful<BR>";
   
    
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

$conn = null;
?>