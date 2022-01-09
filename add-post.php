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
            // echo "<script>alert('Blog submitted successfully'); document.location = 'manage-posts.php';</script>";
            echo "<script>alert($temp[0]);</script>";
        } else {
            echo "<script>alert($title)</script>";
        }
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <title>Add Post</title>

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

    .tox-notifications-container {
      display: none;
    }

    .tox-statusbar__branding {
      display: none;
    }
  </style>

  <meta name="robots" content="noindex, follow">
</head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
          <h2 class="title">Add Post</h2>
        </div>
        <div class="card-body">
          <form method="POST" id="contactForm" method="post" enctype="multipart/form-data">
            <div class="form-row">
              <div class="name">Title</div>
              <div class="value">
                <input class="input--style-6" type="text" id="title" name="title" placeholder="Title" required>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Short Summary of Blog</div>
              <div class="value">
                <div class="input-group">
                  <input class="input--style-6" type="text" id="grabber" name="grabber" placeholder="Breif description"
                    required>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Content</div>
              <div class="value">
                <div class="input-group">
                  <textarea class="textarea--style-6" placeholder="Complete body" id="desc"
                    name="description"></textarea>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="name">Upload Thumbnail</div>
              <div class="value">
                <div class="input-group js-input-file">
                  <input class="input-file" type="file" id="file" name="img1">
                  <label class="label--file" for="file" style="background: rgb(40 135 158); border-radius: 2em;">Choose
                    file</label>
                  <span class="input-file__info">No file chosen</span>
                </div>
              </div>
            </div>
            <div class="card-footer text-center">
              <button class="btn btn--radius-2 btn--blue-2" id="submitBlog" name="submit"
                style="border:2pxpx solid;border-radius: 2em;border-color:rgb(40 135 158);color:rgb(40 135 158);background-color:white;">Add
                Blog</button>
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


      $(".tox-tinymce").css('width', '100%');
      $(".tox-tinymce").css('height', '500px');

      $(".tox-notifications-container").css("display", "none");



    })
  </script>

</body>

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-6/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 13:34:23 GMT -->

</html>
<?php } ?>