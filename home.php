<?php
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$today_date = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="logout.css">
    <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
</head>
<body>
    <div class="logout-container">
        <form action="" method="post">
            <button type="submit" name="logout">Logout</button>
        </form>
    </div>

    <div class="container">
        <h1>My ChatBot</h1>
    </div>

    <?php
    ?>
    <div class="container-form">
        <div class="dispflex">
            <img src="images/cb.avif" alt="">
            <p>Ask me anything..</p>
        </div>
    </div>

    <div class="formclass">
        <form action="" method="post">
            <label for="question">
                <input type="text" id="question" name="question" placeholder="Ask your question">
            </label>
            <button type="submit">Post</button>
        </form>
    </div>


</body>
</html>


<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header("Location: login.php");
}
?>