<?php 
session_start();
if (!(isset($_SESSION['username']) && strlen(trim($_SESSION['username'])) > 0))
{
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sam's Welcome page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="css/customstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="center-element jumbotron shadow">
            <h1>Welcome!</h1>
            <h2><?php echo $_SESSION['username'];?></h2>
            <a id="logoutBtn" href="/app/src/logout.php" class="btn btn-block btn-danger">Log out</a>
        </div>
    </div>
</body>

</html>