
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "getpayed";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // prepare and bind
    $id = $_GET["id"];
    $stmt = $conn->prepare("SELECT * FROM `forum_question` WHERE id = $id");
    $stmt->execute(); 
    
    }
catch(PDOException $e)
    {
    //echo $e->getMessage();
    }

$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home - Getpayed</title>
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
<a href="create_answer.php">Reply</a>
<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">            
                    <?php for($i=0; $row = $stmt->fetch(); $i++){  $topic = $row['topic']; ?>
                        <div class="card-header"><a href="#"><?php echo htmlspecialchars($row['topic']); ?></a> By <a href="#"> <?php echo htmlspecialchars($row['name']); ?></a> : <?php $datetime = htmlspecialchars($row['datetime']); echo $date = date("F jS, Y", strtotime($datetime)); echo '<span class="text-danger">&nbsp; on &nbsp;</span>'; echo $time = date('H:i a', strtotime($datetime)); ?></div>
                        <div class="card-body">
                            <?php echo htmlspecialchars($row['detail']); ?>
                        </div> 
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
 </section>
<?php

try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id = $_GET['id'];
        $stmt = $conn->prepare("SELECT view FROM `forum_question` WHERE id = $id");
        $stmt->execute();
      
        $row = $stmt->fetch();

        $view = $row['view'];
        // Start the session
        session_start();
        
        $_SESSION['q_id'] = $id;

        if(empty($view)){
            $view = 1 ;
            $stmt = $conn->prepare("INSERT INTO `forum_question` (view) VALUES (?) WHERE id = $id");
            $stmt->bindParam(1, $view, PDO::PARAM_INT);
            $stmt->execute();
            
        }

        // count more value
        $addview=$view + 1;
        $stmt = $conn->prepare("UPDATE `forum_question` SET view = $addview WHERE id = $id"); 
        $stmt->execute();   
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

$conn = null;
?>

<?php

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // prepare and bind
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM `forum_answer` WHERE question_id = $id");
    $stmt->execute();
    
    }
catch(PDOException $e)
    {
        echo $e->getMessage();
    }

$conn = null;
?>


<section class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">            
                    <?php for($i=0; $row = $stmt->fetch(); $i++){ ?>
                        <div class="card-header"><a href="#"><?php echo $topic ?></a> By <a href="#"> <?php echo htmlspecialchars($row['a_name']); ?></a> : <?php $datetime = htmlspecialchars($row['a_datetime']); echo $date = date("F jS, Y", strtotime($datetime)); echo '<span class="text-danger">&nbsp; on &nbsp;</span>'; echo $time = date('H:i a', strtotime($datetime)); ?></div>
                        <div class="card-body">
                            <?php echo htmlspecialchars($row['a_answer']); ?>
                        </div> 
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
 </section>

</body>
</html>