<?php
session_set_cookie_params(0);
session_start();
include('includes/config.php');
error_reporting(0);
$_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];

if (isset($_POST['submit'])) {
    $name2 = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $postid = intval($_GET['id']);
    $st1 = '0';
    $sql = "INSERT INTO comments(`postid`,`name`,`email`,`comment`,`status`) VALUES(:postid,:name2,:email,:comment,:st1)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':postid', $postid, PDO::PARAM_STR);
    $query->bindParam(':name2', $name2, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':comment', $comment, PDO::PARAM_STR);
    $query->bindParam(':st1', $st1, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        echo "<script>alert('Comment submitted, wait for approval');</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Post Details</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://kit.fontawesome.com/99d1df08d7.js" crossorigin="anonymous"></script>
</head>

<body>  
    <?php 
        include('includes/preloader.php')
    ?>
<?php 
    include('includes/header.php')
  ?>

    <?php
    $id = intval($_GET['id']);
    $s = 1;
    // $sql1 = "SELECT posts.*,categories.catname,categories.id AS cid FROM posts JOIN categories ON categories.id=posts.category WHERE posts.id=:id AND posts.status=:s";
    $sql1 = "SELECT *FROM posts WHERE posts.id=:id AND posts.status=:s";

    $query = $dbh->prepare($sql1);
    $query->bindParam(':id', $id, PDO::PARAM_STR);
    $query->bindParam(':s', $s, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $cnt = 1;
    if ($query->rowCount() > 0) {
    foreach ($results

    as $result) {
    ?>
    

        <article style="margin-top: 80px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto">

                        <div class="post-preview">
                            <h2 class="post-title"><?php echo htmlentities($result->title); ?></h2>
                            <p class="post-meta"> Posted by admin
                                                 </b>
                                                 on <?php echo htmlentities($result->creationdate); ?>
                            </p>
                            <p style="font-weight: bold;"><?php echo htmlentities($result->grabber); ?></p>
                            <?php if (htmlentities($result->image1) == null) {
                            } else { ?>
                                <p><img class="img-fluid"
                                        src="assets/img/postimages/<?php echo htmlentities($result->image1); ?>"
                                        width="auto" height="auto" style="border:solid 1px #000"></p>
                            <?php } ?>
                            <p style="text-align: justify;"><?php echo ($result->description); ?></p>
                            <p class="post-meta">Posted by&nbsp;<?php echo htmlentities($result->username); ?>
                                                 on <?php echo htmlentities($result->creationdate); ?>
                            </p>
                        </div>
                        <?php }
                        } ?>

                    </div>


                    
                </div>
        </article>
        <?php 
    include('includes/footer.php')
  ?>
  <?php 
    include('includes/header1.php')
  ?>

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