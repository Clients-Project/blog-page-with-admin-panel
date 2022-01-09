<?php
session_set_cookie_params(0);
session_start();
include ('includes/config.php');
if (strlen($_SESSION['login']) == 0)
{
    header('location: login.php');
}
else
{
    if (isset($_REQUEST['del']))
    {
        $delid = intval($_GET['del']);
        $sql = "DELETE FROM posts WHERE id=:delid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':delid', $delid, PDO::PARAM_STR);
        $query->execute();
        echo "<script>alert('Post has deleted successfully'); document.location = 'manage-posts.php';</script>";
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Manage Posts</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        /* .table-bordered, .table-bordered td, .table-bordered th{
                border: 1px solid black;
            } */
    </style>
</head>

<body style="background: rgb(33 37 41)">
    <?php
    include ('includes/preloader.php')
?>
    <?php
    include ('includes/header-admin.php')
?>
    <div class="container">
        <div class="row">

            <div class="container-fluid">
                <h3 class="text-dark mb-4">Posts</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Posts</p>
                    </div>
                    <!-- <a href="add-post-1.php" class="btn btn-primary">Add a post</a> -->
                    <br>
                    <div class="card-body">
                        <div class="table-responsive table mt-2" id="dataTable" role="grid"
                            aria-describedby="dataTable_info">
                            <table class="table dataTable my-0 table-striped table-bordered" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <!-- <th>Category</th> -->
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
    //$sql = "SELECT posts.title,categories.catname,posts.id FROM posts JOIN categories ON categories.id=posts.category";
    $email1 = $_SESSION['login'];
    $sql1 = "SELECT `id` FROM `users` WHERE `email`=:email1";
    $query1 = $dbh->prepare($sql1);
    $query1->bindParam(':email1', $email1, PDO::PARAM_STR);
    $query1->execute();
    $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
    if ($query1->rowCount() > 0)
    {
        foreach ($results1 as $result1)
        {
            $uid = $result1->id;
        }
    }

    if (isset($_GET['page_no']) && $_GET['page_no'] != "")
    {
        $page_no = $_GET['page_no'];
    }
    else
    {
        $page_no = 1;
    }

    $idno = $page_no;
    if($idno > 1)
    {
        $idno = $idno - 1;
    }
    else
    {
        $idno = 1;
    }

    $data_per_page = 20;
    $offset = ($page_no - 1) * $data_per_page;

    $previous_page = $page_no ? $page_no - 1 : 0;

    $next_page = $page_no + 1;

    $status = 1;
    // $sql = "SELECT title,posts.id,catname FROM posts, categories WHERE categories.id=posts.category AND posts.userid=:uid AND posts.status=:status";
    $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT $offset, $data_per_page";
    $query = $dbh->prepare($sql);
    // $query->bindParam(':uid', $uid, PDO::PARAM_STR);
    // $query->bindParam(':status', $status, PDO::PARAM_STR);
    $query->execute();

    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $cnt = 1;
    if ($query->rowCount() > 0)
    {
        foreach ($results as $result)
        { ?>
                                    <tr>
                                        <td>
                                            <?php echo htmlentities($cnt + $page_no * $data_per_page); ?>
                                        </td>
                                        <td>
                                            <?php echo htmlentities($result->title); ?>
                                        </td>
                                        <!-- <td><?php echo htmlentities($result->catname); ?></td> -->
                                        <td><a class="btn btn-success" style="width:100%; border-radius: 1.5em;"
                                                href="edit-post-1.php?id=<?php echo $result->id; ?>">edit</a>
                                        <td><a class="btn btn-danger deletePost"
                                                style="width:100%; border-radius: 1.5em; color:white;"
                                                data-link="manage-posts.php?del=<?php echo $result->id; ?>">delete</a>
                                            <a class="btn btn-danger deletePost"
                                                href="manage-posts.php?del=<?php echo $result->id; ?>"
                                                style="width:100%;display: none">delete</a>
                                        </td>
                                        <!--  -->
                                    </tr>
                                    <?php $cnt = $cnt + 1;
        }
    } ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <!-- <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
                                        Showing 1 to 5 of 100</p>
                                </div> -->

                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li class="page-item
                                        <?php 
                                            if($page_no == 1)
                                                echo 'disabled';
                                        ?>
                                        
                                        "><a class="page-link"
                                                style="border:none; border-radius: 2em;margin-right: 15px;background: rgb(40 135 158);color:white;"
                                                href="?page_no=<?php echo $previous_page; ?>"
                                                aria-label="Previous"><span aria-hidden="true"><i
                                                        class="fas fa-chevron-left"></i></span></a></li>

                                        <?php
    $sql = "SELECT * FROM posts";
    $query = $dbh->prepare($sql);
    $query->execute();
    $count = $query->rowCount();
    $pages = ceil($count / $data_per_page);
    $count = $pages;

    $increaseCount = 0;
    while ($count)
    {

        $increaseCount = $increaseCount + 1;
?>

                                        <li class="page-item active"><a class="page-link"
                                                style="border:none; border-radius: 2em;background: rgb(40 135 158);color:white;"
                                                href="?page_no=<?php echo $increaseCount; ?>">
                                                <?php echo $increaseCount; ?>
                                            </a></li>
                                        <?php
        $count = $count - 1;
    }
?>
                                        <li class="page-item
                                        <?php
                                        if ($page_no >= $pages)
    {
        echo "disabled"; } else { echo '' ; } ?>              
                                        
                                        
                                        "><a class="page-link"
                                                style="border:none; border-radius: 2em;margin-left: 15px;background: rgb(40 135 158);color:white;" href="
                                        
                                        <?php
    if ($page_no >= $pages)
    {
        echo '#' ; } else { echo "?page_no=$next_page"; } ?>

                                                " aria-label="Next"
                                                ><span aria-hidden="true"><i
                                                        class="fas fa-chevron-right"></i></span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

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


        $(".deletePost").click(function () {

            let deleteLink = $(this).attr('data-link')


            swal({
                title: "Are you sure to delete?",
                text: "Once deleted, you will not be able to recover this post",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {

                        document.location.href = deleteLink;

                        swal("Post has been deleted", {
                            icon: "success",
                        });
                    } else {
                    }
                });
        })



    </script>
</body>

</html>
<?php

        $dbh = null;

} ?>