<?php
session_set_cookie_params(0);
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
    header('location: login.php');
} else {
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $grabber = $_POST['grabber'];
        $description = $_POST['description'];

        $image1 = $_FILES["img1"]["name"];
        $status = 0;
        echo $title;
        echo $grabber;
        echo $description;

        move_uploaded_file($_FILES["img1"]["tmp_name"], "assets/img/postimages/" . $_FILES["img1"]["name"]);

        $sql = "INSERT INTO posts(title,grabber,description) VALUES(:title,:grabber,:description)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':title', $title, PDO::PARAM_STR);
        $query->bindParam(':grabber', $grabber, PDO::PARAM_STR);
        $query->bindParam(':description', $description, PDO::PARAM_STR);
        // $query->bindParam(':image1', $image1, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            echo "<script>alert('Blog submitted successfully, wait for approval'); document.location = 'index.php';</script>";
        } else {
            echo "<script>alert($title)</script>";
            echo $title;
        echo $grabber;
        echo $description;
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add Post</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <script src="assets/js/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({ selector: 'textarea' });</script>
</head>

<body>

    <div class="container">
        <h2>Add Post</h2>
        <form id="contactForm" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input class="form-control" id="title" name="title" type="text" placeholder="Default input">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input class="form-control" id="grabber" name="grabber" type="text" placeholder="Default input">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="desc" name="description" rows="3"></textarea>
            </div>
            <div id="success"></div>
            <div class="form-group">
                <button class="btn btn-primary float-right" id="sendMessageButton" type="submit" name="submit">Post
                </button>
            </div>
        </form>

    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
</body>

</html>

<?php } ?>