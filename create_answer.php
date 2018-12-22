<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create New Topic - Getpayed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
   <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
  <script src="script.js"></script>
</head>
<body>

<?php
// Start the session
// session_start();
// //$question_id = "";

// $question_id =  $_SESSION['q_id']; echo $question_id  

?>

<form action="add_answer.php" method="post">
    
    Name: <br>
    <input type="text" name="a_name" required><br>
    Email: <br>
    <input type="email" name="a_email" id="a_email">
    <br>
    Answer: <br>
    <textarea name="a_answer" id="" cols="30" rows="10"></textarea><br>

    <!-- <input name="id" type="hidden" value="<? echo $id; ?>"> -->

    <input type="submit" value="Reply">

</form>

</body>
</html>