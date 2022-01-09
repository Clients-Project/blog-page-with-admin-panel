<?php
session_set_cookie_params(0);
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
    header('location: login.php');
} else {
    if (isset($_POST['update'])) {
        $image1 = $_FILES["img1"]["name"];
        $id = intval($_GET['imgid']);

        $temp = explode(".", $_FILES["img1"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $image1 = $newfilename;



        move_uploaded_file($_FILES["img1"]["tmp_name"], "assets/img/postimages/" . $newfilename);
        $sql = "UPDATE posts SET image1=:image1 WHERE id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':image1', $image1, PDO::PARAM_STR);
        $query->bindParam(':id', $id, PDO::PARAM_STR);
        $query->execute();

        echo "<script>alert('Image updated successfully');</script>";
        echo "<script>document.location = 'edit-post-1.php?id=$id';</script>";
    }
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Update Header Image</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    </head>

    <body>
    <?php 
        include('includes/preloader.php')
    ?>
    <?php 
        include('includes/header-admin.php')
    ?>

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <h2 class="post-title">Update Header Image</h2>
                    <br>
                    <?php
                    $id = intval($_GET['imgid']);
                    $sql = "SELECT image1 FROM posts WHERE posts.id=:id";
                    $query = $dbh->prepare($sql);
                    $query->bindParam(':id', $id, PDO::PARAM_STR);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                    foreach ($results

                    as $result) { ?>
                    <form id="contactForm" method="post" enctype="multipart/form-data">
                        <div class="col-sm-8">
                            <img src="assets/img/postimages/<?php echo htmlentities($result->image1); ?>"
                                 width="300" height="200"
                                 style="border:solid 1px #000">
                        </div>
                        <?php }
                        } ?>

                        <br>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Upload New Header Image 1<span
                                    style="color:red">*</span></label>
                            <div class="col-sm-8">
                                <input type="file" name="img1" required>
                            </div>
                        </div>
                        <div class="hr-dashed"></div>
                        <div id="success"></div>
                        <div class="form-group">
                            <button class="btn btn-primary" id="sendMessageButton" type="submit" name="update">Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
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

<?php } ?>