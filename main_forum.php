
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

    $stmt = $conn->prepare("SELECT * FROM `forum_question` ORDER BY id DESC");
    $stmt->execute();
    
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
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

  <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Topics</th>
                        <th>Views</th>
                        <th>Replies</th>
                        <th>Date/Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=0; $row = $stmt->fetch(); $i++){ ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><a href="view_topic.php?id=<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['topic']); ?></a></td>
                            <td><?php echo htmlspecialchars($row['view']); ?></td>
                            <td><?php echo htmlspecialchars($row['reply']); ?></td>
                            <td><?php echo htmlspecialchars($row['datetime']); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create_topic.php"><strong>Create New Topic</strong> </a></td>
</body>
</html>
