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
<!doctype html>
<html lang="en">


<!-- Mirrored from noonpost.netlify.app/html/template/post-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 05:23:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="assets/img/logo-new.png">

    <!-- Title -->
    <title></title>


    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/elegant-font-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">

    <!-- main style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <!--loading -->
    <!-- <div class="loading">
        <div class="circle"></div>
    </div> -->
    <!--/-->

    <?php 
        include('includes/preloader.php')
    ?>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg fixed-top" style="background:rgb(43,43,43);">
        <div class="container-fluid">
            <!--logo-->
            <div class="logo">
                <a href="index.html">
                    <!-- <img src="assets/img/logo-dark.png" alt="" class="logo-dark"> -->
                    <img src="assets/img/logo-new.png" alt="" class="logo-dark">
                    <!-- <img src="assets/img/logo-white.png" alt="" class="logo-white"> -->
                    <img src="assets/img/logo-new.png" alt="" class="logo-white">
                </a>
            </div>
            <!--/-->

            <!--navbar-collapse-->
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link " style="color:rgb(255,255,255);" href="https://www.np1.in/"> Home </a>
                        <!-- <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="index.html">Demo 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-2.html">Demo 2 </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-3.html">Demo 3 </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-4.html">Demo 4 </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-5.html">Demo 5</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-6.html">Demo 6 </a>
                            </li>
                        </ul> -->
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link  " style="color:rgb(255,255,255);" href="/personal-blog/"> Blog </a>
                        <!-- <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="blog-grid.html"> Blog grid</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="blog-masonry.html"> Blog masonry </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="blog-list.html"> Blog list </a>
                            </li>
                        </ul> -->
                    </li>
                    <!-- <li class="nav-item ">
                        <a class="nav-link  " href="post-default.html">Media</a>
                         <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item active" href="post-default.html"> post default</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-video.html"> post video</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-audio.html"> post audio</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-gallery.html"> post gallery</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-no-sidebar.html"> post no sidebar </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-left-sidebar.html"> post left sidebar </a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="nav-item ">
                        <a class="nav-link  " style="color:rgb(255,255,255);" href="https://www.np1.in/team/">People</a>
                        <!-- <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item active" href="post-default.html"> post default</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-video.html"> post video</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-audio.html"> post audio</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-gallery.html"> post gallery</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-no-sidebar.html"> post no sidebar </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-left-sidebar.html"> post left sidebar </a>
                            </li>
                        </ul> -->
                    </li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">Pages </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="about.html"> About </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="author.html"> author </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="login.html"> Login </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="register.html"> Sign up </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="page404.html"> Page 404 </a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" style="color:rgb(255,255,255);" href="https://www.np1.in/apply/">Apply</a>
                    </li>

                </ul>
            </div>
            <!--/-->

            <!--navbar-right-->
            <div class="navbar-right ml-auto">
                <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round" style="border: 1px solid rgb(217 217 217);"></div>
                    </label>
                </div>
                <div class="social-icones social-media">
                    <ul class="list-inline">
                        <!-- <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li> -->
                        <!-- <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li> -->
                        <li>
                            <a style="background-color:  #00acee;" href="https://twitter.com/np1capital"
                                target="_blank">
                                <i style="color: white;" class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a style="background-color: white;" href="https://medium.com/@np1capital" target="_blank">
                                <i class="fab fa-medium-m" style="color: black;"></i>
                            </a>
                        </li>
                        <li>
                            <a style="background-color: #0e76a8;"
                                href="https://www.linkedin.com/company/np1capital/about/" target="_blank">
                                <i style="color: white;" class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li> -->
                    </ul>
                </div>

                <!-- <div class="search-icon">
                    <i class="icon_search"></i>
                </div> -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
    <!--/-->


    <!--post-default-->

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


    <section class="section pt-55 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mb-20">
                    <!--Post-single-->
                    <div class="post-single">
                        <div class="post-single-image" style="text-align: center;">
                            <img src="assets/img/postimages/<?php echo $result->image1 ;?>" alt=""
                                style="width: 100%; max-height: 385px; object-fit:cover;">
                        </div>
                        <div class="post-single-content">
                            <!-- <a href="blog-grid.html" class="categorie">travel</a> -->
                            <h4>
                                <?php echo htmlentities($result->title); ?>
                            </h4>
                            <div class="post-single-info">
                                <ul class="list-inline">
                                    <li>
                                        <!-- <a href="author.html"><img src="assets/img/author/1.jpg" alt=""></a> -->
                                        Posted By
                                    </li>
                                    <li><a href="author.html">Admin</a> </li>
                                    <li class="dot"></li>
                                    <li>
                                        <?php echo date('d F Y', strtotime($result->creationdate)); ?>
                                    </li>
                                    <!-- <li class="dot"></li>
                                    <li>3 comments</li> -->
                                </ul>
                            </div>
                        </div>

                        <div class="post-single-body">
                            <?php echo ($result->description); ?>
                        </div>

                        <div class="post-single-footer">
                            <div class="tags">
                                <!-- <ul class="list-inline">
                                    <li>
                                        <a href="blog-grid.html">Travel</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid.html">Nature</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid.html">tips</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid.html">forest</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid.html">beach</a>
                                    </li>

                                </ul> -->
                            </div>
                            <div class="social-media">
                                <ul class="list-inline">
                                    <!-- <li>
                                        <a href="#" class="color-facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li> -->
                                    <!-- <li>
                                        <a href="#" class="color-instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="https://twitter.com/np1capital" target="_blank" class="color-twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://medium.com/@np1capital" class="color-twitter"
                                            target="_blank style=" style="background-color: white;">
                                            <i class="fab fa-medium-m" style="color:black"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/np1capital/about/"
                                            target="_blank class=" color-twitter" style="background-color: #0077b5;">
                                            <i class="fab fa-linkedin-in" style="color:white"></i>
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="#" class="color-youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li> -->
                                    <!-- <li>
                                        <a href="#" class="color-pinterest">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php }
                        } ?>
                    <!--/-->

                    <!--next & previous-posts-->
                    <div class="row">


                        <?php 


                        $next = 0;
                        $prev = 0;
                        if($id > 1 && $id < $total_rows)
                        {
                            $next = $id + 1;
                            $prev = $id - 1;
                        }
                        elseif( $id < 1)
                        {
                            $next = $id + 2;
                            $prev = $id + 1;
                        }
                        else
                        {
                            $next = $id - 2;
                            $prev = $id - 1;
                        }


                        $sql1 = "SELECT * FROM `posts` WHERE (posts.id = $next OR posts.id = $prev) AND posts.status = 1 ORDER BY id ASC";
                        $stmt1 = $dbh->prepare($sql1);
                        $stmt1->execute();

                        $datas = $stmt1->fetchAll(PDO::FETCH_OBJ);
                        $count = 0;
                        
                        $data = $datas[0];
                        if(isset($data->id))
                        {

                        
                        ?>

                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-next-post">
                                    <div class="small-post">
                                        <div class="image">
                                            <a href="post-details-1.php?id=<?php echo $data->id?>">
                                                <img src="assets/img/postimages/<?php echo $data->image1 ;?>" alt="..."
                                                    style="object-type: fill;">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <div>
                                                <a class="link" href="post-details-1.php?id=<?php echo $data->id?>"><i
                                                        class="arrow_left"></i>Preview post</a>
                                            </div>
                                            <a href="post-details-1.php?id=<?php echo $data->id?>">
                                                <?php echo htmlentities($data->title); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                        }
                            $data = $datas[1];
                        if(isset($data->id))
                        {
                        ?>
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-previous-post">
                                    <div class="small-post">
                                        <div class="image">
                                            <a href="post-details-1.php?id=<?php echo $data->id?>">
                                                <img src="assets/img/postimages/<?php echo $data->image1 ;?>" alt="..."
                                                    style="object-type: fill;">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <div>
                                                <a class="link" href="post-details-1.php?id=<?php echo $data->id?>">
                                                    <span> Next post</span>
                                                    <span class="arrow_right"></span>
                                                </a>
                                            </div>
                                            <a href="post-details-1.php?id=<?php echo $data->id?>">
                                                <?php echo htmlentities($data->title); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                        }
                        ?>
                    </div>
                    <!--/-->

                    <!--widget-comments-->
                </div>
                <div class="col-lg-4 max-width">
                    <!--widget-author-->
                    <div class="widget">
                        <div class="widget-author">
                            <a href="author.html" class="image">
                                <img src="assets/img/logo-new.png" alt="" style="object-fit: contain;">
                            </a>
                            <h6>
                                <span>Hello, We are N+1 Capital</span>
                            </h6>
                            <p>
                                N+1 Capital is Revenue Based Growth Capital for New Age Entrepreneurs of India.
                                We are a
                                $100M fund that solves major challenges faces in typical fundraising process.
                            </p>


                            <div class="social-media">
                                <ul class="list-inline">
                                    <!-- <li>
                                        <a href="#" class="color-facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li> -->
                                    <!-- <li>
                                        <a href="#" class="color-instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="https://twitter.com/np1capital" target="_blank" class="color-twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://medium.com/@np1capital" class="color-twitter" target="_blank"
                                            style="background-color: white;">
                                            <i class="fab fa-medium-m" style="color:black"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/np1capital/about/"
                                            class="color-twitter" target="_blank" style="background-color: #0077b5;">
                                            <i class="fab fa-linkedin-in" style="color:white"></i>
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="#" class="color-youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li> -->
                                    <!-- <li>
                                        <a href="#" class="color-pinterest">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/-->

                    <!--widget-latest-posts-->
                    <div class="widget ">
                        <div class="section-title">
                            <h5>Latest Posts</h5>
                        </div>
                        <ul class="widget-latest-posts">

                            <?php 
                        
                        $sql1 = "SELECT * FROM `posts` WHERE posts.status=1 ORDER BY id DESC LIMIT 6";
                        $stmt1 = $dbh->prepare($sql1);
                        $stmt1->execute();

                        $datas = $stmt1->fetchAll(PDO::FETCH_OBJ);
                        $count = 0;
                        foreach($datas as $data)
                        {
                            if($id == $data->id)
                            {
                                continue;
                            }
                            $count = $count + 1;
                        ?>

                            <li class="last-post">
                                <div class="image">
                                    <a href="post-details-1.php?id=<?php echo $data->id?>">
                                        <img src="assets/img/postimages/<?php echo $data->image1 ;?>"
                                            style="object-fit: cover" alt="...">
                                    </a>
                                </div>
                                <div class="nb">
                                    <?php echo $count ;?>
                                </div>
                                <div class="content">
                                    <p><a href="post-details-1.php?id=<?php echo $data->id?>">
                                            <?php echo htmlentities($data->title); ?>
                                        </a></p>
                                    <small><span class="icon_clock_alt"></span>
                                        <?php echo date('d F Y', strtotime($data->creationdate)); ?>
                                    </small>
                                </div>
                            </li>

                            <?php
                                }
                            ?>

                            <!-- <li class="last-post">
                                <div class="image">
                                    <a href="post-default.html">
                                        <img src="assets/img/latest/2.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="nb">2</div>
                                <div class="content">
                                    <p>
                                        <a href="post-default.html">Everything you need to know about visiting
                                            the
                                            Amazon.</a>
                                    </p>
                                    <small>
                                        <span class="icon_clock_alt"></span> January 15, 2021</small>
                                </div>
                            </li>
                            <li class="last-post">
                                <div class="image">
                                    <a href="post-default.html">
                                        <img src="assets/img/latest/3.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="nb">3</div>
                                <div class="content">
                                    <p>
                                        <a href="post-default.html">How to spend interesting vacation after hard
                                            work?</a>
                                    </p>
                                    <small>
                                        <span class="icon_clock_alt"></span> January 15, 2021</small>
                                </div>
                            </li>
                            <li class="last-post">
                                <div class="image">
                                    <a href="post-default.html">
                                        <img src="assets/img/latest/4.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="nb">4</div>
                                <div class="content">
                                    <p>
                                        <a href="post-default.html">10 Best and Most Beautiful Places to Visit
                                            in
                                            Italy</a>
                                    </p>
                                    <small>
                                        <span class="icon_clock_alt"></span> January 15, 2021</small>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                    <!--/-->

                    <!--widget-categories-->
                    <!-- <div class="widget">
                        <div class="section-title">
                            <h5>Categories</h5>
                        </div>
                        <ul class="widget-categories">
                            <li>
                                <a href="#" class="categorie">Livestyle</a>
                                <span class="ml-auto">22 Posts</span>
                            </li>
                            <li>
                                <a href="#" class="categorie">Travel</a>
                                <span class="ml-auto">18 Posts</span>
                            </li>
                            <li>
                                <a href="#" class="categorie">Food</a>
                                <span class="ml-auto">14 Posts</span>
                            </li>
                            <li>
                                <a href="#" class="categorie">fashion</a>
                                <span class="ml-auto">10 Posts</span>
                            </li>
                        </ul>
                    </div> -->
                    <!--/-->

                    <!--widget-instagram-->
                    <!-- <div class="widget">
                        <div class="section-title">
                            <h5>Instagram</h5>
                        </div>
                        <ul class="widget-instagram">
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/1.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/2.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/3.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/4.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/5.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/6.jpg" alt="">
                                </a>
                            </li>
                        </ul>

                    </div> -->
                    <!--/-->

                    <!--widget-tags-->
                    <!-- <div class="widget">
                        <div class="section-title">
                            <h5>Tags</h5>
                        </div>
                        <div class="widget-tags">
                            <ul class="list-inline">
                                <li>
                                    <a href="blog-grid.html">Travel</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">Nature</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">tips</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">forest</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">beach</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">fashion</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">livestyle</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">healty</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">food</a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">breakfast</a>
                                </li>

                            </ul>
                        </div>
                    </div> -->
                    <!--/-->
                </div>
            </div>
        </div>
    </section>
    <!--/-->


    <!--newslettre-->
    <section class="newslettre" style="background: rgb(43 43 43)">
        <div class="container-fluid">
            <div class="newslettre-width text-center">
                <div class="newslettre-info">
                    <h5 style="color:rgb(40 135 158);">Tell Us About Your Venture</h5>
                    <p style="color:rgb(217,217,217);">Let N+1 Capital help your venture in fundraising process</p>
                </div>
                <form action="#" class="newslettre-form">
                    <div class="form-flex">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your email adress"
                                required="required" style="background:rgb(43,43,43);">
                        </div>
                        <button class="submit-btn" type="submit">Go <i class="fas fa-chevron-right"></i></button>
                    </div>
                </form>
                <div class="social-icones">
                    <ul class="list-inline">
                        <!-- <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>Facebook</a>
                        </li> -->
                        <li>
                            <a style="color:rgb(217,217,217);" href="https://twitter.com/np1capital" target="_blank">
                            <span>
                                <i class="fab fa-twitter" style="color:rgb(217,217,217);"></i>Twitter </span></a>
                        </li>
                        <li>
                            <a style="color:rgb(217,217,217);" href="https://medium.com/@np1capital" target="_blank">
                            <span><i class="fab fa-medium-m" style="color:rgb(217,217,217);"></i>Medium </span></a>
                        </li>
                        <li>
                            <a style="color:rgb(217,217,217);"  href="https://www.linkedin.com/company/np1capital/about/" target="_blank">
                            <span><i class="fab fa-linkedin-in" style="color:rgb(217,217,217);"></i>
                                Linkedin </span></a>
                        </li>
                        <!-- <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>Instagram </a>
                        </li> -->
                        <!-- <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>Youtube</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--footer-->
    <footer class="footer" style="background:rgb(43,43,43);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <p style="color:rgb(217,217,217);">© Copyright 2021 <a href="#">AssiaGroupe</a>, All rights reserved.</p>
                    </div>
                    <div class="back">
                        <a href="#" class="back-top">
                            <i class="arrow_up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Search-form-->
    <div class="search">
        <div class="container-fluid">
            <div class="search-width  text-center">
                <button type="button" class="close">
                    <i class="icon_close"></i>
                </button>
                <form class="search-form" action="#">
                    <input type="search" value="" placeholder="What are you looking for?">
                    <button type="submit" class="search-btn">search</button>
                </form>
            </div>
        </div>
    </div>
    <!--/-->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.5.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- JS Plugins  -->
    <script src="assets/js/ajax-contact.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/switch.js"></script>

    <!-- JS main  -->
    <script src="assets/js/main.js"></script>

    <script>
        $(window).on('load', function () { // makes sure the whole site is loaded 
            $('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({ 'overflow': 'visible' });


            // removing unwanted css
            x = $(".post-single-body");
            y = x.children().each(function(){
                $(this).css('color','unset');
                $(this).css('background-color','unset');

                

            })
        })
    </script>

</body>

<!-- Mirrored from noonpost.netlify.app/html/template/post-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Jan 2022 05:24:08 GMT -->

</html>