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
        // $cat = $_POST['selectcat'];
        $grabber = $_POST['grabber'];
        $description = $_POST['description'];
        $id = intval($_GET['id']);

        $sql = "UPDATE `posts` SET title=:title,grabber=:grabber,description=:description WHERE id=:id ";
        $query = $dbh->prepare($sql);
        $query->bindParam(':title', $title, PDO::PARAM_STR);
        // $query->bindParam(':cat', $cat, PDO::PARAM_STR);
        $query->bindParam(':grabber', $grabber, PDO::PARAM_STR);
        $query->bindParam(':description', $description, PDO::PARAM_STR);
        $query->bindParam(':id', $id, PDO::PARAM_STR);
        $query->execute();

        echo "<script>alert('Post has updated successfully'); document.location = 'manage-posts.php';</script>";
    }
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Post</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <script src="assets/js/jquery.min.js"></script>
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
    <div class="container" style="margin-top:40px">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <h2 class="post-title">Edit a post</h2>
                <br>
                <?php
                    $id = intval($_GET['id']);
                    $sql = "SELECT * FROM posts WHERE posts.id=:id";
                    $query = $dbh->prepare($sql);
                    $query->bindParam(':id', $id, PDO::PARAM_STR);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                    foreach ($results

                    as $result) { ?>
                <form id="contactForm" method="post" enctype="multipart/form-data">
                    <div class="control-group">
                        <label for="title"><strong>Title</strong></label>
                        <div class="form-group floating-label-form-group controls"><input class="form-control"
                                type="text" id="title" required="" placeholder="Title" name="title"
                                value="<?php echo htmlentities($result->title); ?>"><small
                                class="form-text text-danger help-block"></small></div>
                    </div>


                    <div class="control-group">
                        <label for="grabber"><strong>Grabber</strong></label>
                        <div class="form-group floating-label-form-group controls"><input class="form-control"
                                type="text" id="grabber" required="" placeholder="Grabber" name="grabber"
                                value="<?php echo htmlentities($result->grabber); ?>"><small
                                class="form-text text-danger help-block"></small></div>
                    </div>

                    <div class="control-group">
                        <label for="image1"><strong>Header Image</strong></label>
                        <div class="form-group floating-label-form-group controls"><img
                                src="assets/img/postimages/<?php echo htmlentities($result->image1); ?>" width="300"
                                style="border:solid 1px #000"><br><br>
                            <a href="changeimage1.php?imgid=<?php echo htmlentities($result->id) ?>">Change
                                Header Image</a>
                            <small class="form-text text-danger help-block"></small>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="desc"><strong>Description</strong></label>
                        <div class="form-group floating-label-form-group controls mb-3"><textarea class="form-control"
                                id="desc" data-validation-required-message="Description" required=""
                                placeholder="Description" rows="5"
                                name="description"><?php echo htmlentities($result->description); ?></textarea><small
                                class="form-text text-danger help-block"></small></div>
                    </div>
                    <?php }
                        } ?>
                    <div id="success"></div>
                    <div class="form-group">
                        <button class="btn btn-primary" id="sendMessageButton" type="submit" name="submit">Update
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
        $(window).on('load', function () { // makes sure the whole site is loaded 
            $('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({ 'overflow': 'visible' });
        })
    </script>

</body>

</html>

<?php }
    $dbh = null;
?>