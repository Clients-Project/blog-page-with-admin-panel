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

        echo "<script>alert('Post has updated successfully');document.location = 'manage-posts.php';</script>";
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-6/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 13:34:18 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Colorlib Templates">
  <meta name="author" content="Colorlib">
  <meta name="keywords" content="Colorlib Templates">

  <title>Edit Post</title>

  <style id="" media="all">
    @font-face {
      font-family: 'Open Sans';
      font-style: italic;
      font-weight: 300;
      font-stretch: normal;
      src: url(https://colorlib.com/fonts.gstatic.com/s/opensans/v27/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk5hkWVAexQ.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: italic;
      font-weight: 400;
      font-stretch: normal;
      src: url(https://colorlib.com/fonts.gstatic.com/s/opensans/v27/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk8ZkWVAexQ.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: italic;
      font-weight: 600;
      font-stretch: normal;
      src: url(https://colorlib.com/fonts.gstatic.com/s/opensans/v27/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkxhjWVAexQ.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: italic;
      font-weight: 700;
      font-stretch: normal;
      src: url(https://colorlib.com/fonts.gstatic.com/s/opensans/v27/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkyFjWVAexQ.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: italic;
      font-weight: 800;
      font-stretch: normal;
      src: url(https://colorlib.com/fonts.gstatic.com/s/opensans/v27/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk0ZjWVAexQ.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 300;
      font-stretch: normal;
      src: url(https://colorlib.com/fonts.gstatic.com/s/opensans/v27/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsiH0B4gaVc.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 400;
      font-stretch: normal;
      src: url(https://colorlib.com/fonts.gstatic.com/s/opensans/v27/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4gaVc.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 600;
      font-stretch: normal;
      src: url(https://colorlib.com/fonts.gstatic.com/s/opensans/v27/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsgH1x4gaVc.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 700;
      font-stretch: normal;
      src: url(https://colorlib.com/fonts.gstatic.com/s/opensans/v27/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsg-1x4gaVc.ttf) format('truetype');
    }

    @font-face {
      font-family: 'Open Sans';
      font-style: normal;
      font-weight: 800;
      font-stretch: normal;
      src: url(https://colorlib.com/fonts.gstatic.com/s/opensans/v27/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgshZ1x4gaVc.ttf) format('truetype');
    }

    .tox-notifications-container{
        display: none;
    }
    .tox-statusbar__branding{
      display:none;
    }
  </style>

<meta name="robots" content="noindex, follow">
</head>

<script src="assets/js/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({ selector: 'textarea' });</script>

<body>
  <?php 
        include('includes/preloader.php')
        ?>
  <?php 
        include('includes/header-admin.php')
        ?>
        <link href="assets/css/main.css" rel="stylesheet" media="all">
  <div class="page-wrapper bg-dark p-t-100 p-b-50">
    <div class="wrapper wrapper--w900">
      <div class="card card-6">
        <div class="card-heading">
          <h2 class="title">Edit Post</h2>
        </div>
        <div class="card-body">


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



          <form method="POST" id="contactForm" method="post" enctype="multipart/form-data">
            <div class="form-row">
              <div class="name">Title</div>
              <div class="value">
                <input required class="input--style-6" type="text" id="title" name="title" placeholder="Title"  value="<?php echo htmlentities($result->title); ?>">
              </div>
            </div>
            <div class="form-row">
              <div class="name">Short Summary of Blog</div>
              <div class="value">
                <div class="input-group">
                  <input  required class="input--style-6" type="text" id="grabber" name="grabber" placeholder="Breif description" value="<?php echo htmlentities($result->grabber); ?>">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Content</div>
              <div class="value">
                <div class="input-group">
                  <textarea class="textarea--style-6" name="description" placeholder="Complete body"
                    id="desc" required><?php echo htmlentities($result->description); ?></textarea>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Upload Thumbnail</div>
              <div class="value">
                <div class="input-group js-input-file">
                  <!-- <input class="input-file" type="file" id="file" name="img1"> -->
                  <a href="changeimage1.php?imgid=<?php echo htmlentities($result->id) ?>" class="btn btn--radius-2 btn--blue-2" style="border-radius: 2em; background-color:rgb(40 135 158);">
                  Change</a>
                  <!-- <span class="input-file__info">No file chosen</span> -->
                </div>
              </div>
            </div>
            <?php }
                        } ?>

<div class="card-footer text-center" >
  <button class="btn btn--radius-2 btn--blue-2" name="submit" type="submit" style="border:2pxpx solid;border-radius: 2em;border-color:rgb(40 135 158);color:rgb(40 135 158);background-color:white;">Submit</button>
</div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/vendor/jquery/jquery.min.js"></script>

  <script src="assets/js/global.js"></script>

  <script>
    $(window).on('load', function () { // makes sure the whole site is loaded 
      $('#status').fadeOut(); // will first fade out the loading animation 
      $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
      $('body').delay(350).css({ 'overflow': 'visible' });


      $(".tox-tinymce").css('width','100%');
      $(".tox-tinymce").css('height','500px');

      $(".tox-notifications-container").css("display","none");

    })
  </script>

</body>

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-6/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 13:34:23 GMT -->

</html>
<?php } ?>