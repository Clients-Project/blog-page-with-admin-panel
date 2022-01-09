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
        $status = 1;

        $temp = explode(".", $_FILES["img1"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $image1 = $newfilename;


        move_uploaded_file($_FILES["img1"]["tmp_name"], "assets/img/postimages/" . $newfilename);

        $sql = "INSERT INTO posts(title,grabber,description,image1,status) VALUES(:title,:grabber,:description,:image1,:status)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':title', $title, PDO::PARAM_STR);
        $query->bindParam(':grabber', $grabber, PDO::PARAM_STR);
        $query->bindParam(':description', $description, PDO::PARAM_STR);
        $query->bindParam(':image1', $image1, PDO::PARAM_STR);
        $query->bindParam(':status', $status, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            echo "<script>alert('Blog submitted successfully'); document.location = 'manage-posts.php';</script>";
            // echo "<script>alert($temp[0]);</script>";
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
<?php 
        include('includes/preloader.php')
    ?>
    <?php 
        include('includes/header-admin.php')
    ?>

    <div class="container">
        <h2>Add Post</h2>
        <form id="contactForm" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input class="form-control" id="title" name="title" type="text" placeholder="Default input">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Grabber</label>
                <input class="form-control" id="grabber" name="grabber" type="text" placeholder="Default input">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Thumbnail</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img1">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Content</label>
                <textarea class="form-control" id="desc" name="description" rows="3"></textarea>
            </div>
            <div id="success"></div>
            <div class="form-group" style="margin-bottom: 250px">
                <button class="btn btn-primary float-right" id="sendMessageButton" type="submit" name="submit">Post
                </button>
            </div>
        </form>

    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>

    <script>
            $(window).on('load', function() { // makes sure the whole site is loaded 
                $('#status').fadeOut(); // will first fade out the loading animation 
                $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
                $('body').delay(350).css({'overflow':'visible'});
                })
    </script>

</body>

</html>

<?php }
    $dbh = null;
?>