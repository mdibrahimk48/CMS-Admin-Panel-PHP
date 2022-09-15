<?php

    $id = $_GET["id"];

    include("cms-crud.php");
    $query = "SELECT post.*, category.id as 'cat_id', category.name as 'cat_name' FROM post 
    join category
    on post.category_id = category.id
    WHERE post.id=$id";

    $result = cmsSecletByColumn($query);

    $rows = mysqli_fetch_assoc($result);

    $category_query = "select *  From category ";

    $category_resutl = cmsSecletByColumn($category_query);

?>

<?php

session_start();

if (isset($_SESSION["username"])) {



    include("header-script.php");

?>

    <body class="main-body app sidebar-mini">

        <!-- Loader -->
        <div id="global-loader">
            <img src="assets/img/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /Loader -->

        <!-- Page -->
        <div class="page">

            <!-- main-sidebar -->
            <?php

            include("main-sidebar.php");

            ?>
            <!-- main-sidebar -->

            <!-- main-content -->
            <div class="main-content app-content">

                <!-- main-header -->
                <?php

                include("main-header.php");

                ?>
                <!-- /main-header -->

                <!-- container -->
                <div class="container-fluid">


                    <!-- Bordared table -->
                    <div class="col-xl-12">
                        <div class="card mg-b-20">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0">You Can Update</h4>
                                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                                </div>
                                <p class="tx-12 tx-gray-500 mb-2"><a href=""></a></p>
                            </div>
                            <div class="card-body">
                                <form action="update-post.php" method="post" enctype="multipart/form-data">
                                    <input class="form-control" name="id" value="<?php echo $rows["id"]; ?>" placeholder="Enter your firstname and lastname" type="hidden">
                                    <div class="form-group">
                                        <label>Post Title</label> <input class="form-control" name="title" value="<?php echo $rows["title"]; ?>" placeholder="Enter Category Name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Short Description</label> <input class="form-control" name="short_description" value="<?php echo $rows["short_description"]; ?>" placeholder="Enter Category Code" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Long description</label> <input class="ckeditor" class="form-control" value="<?php echo $rows["long_description"]; ?>" name="long_description" placeholder="Enter Category Code" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Category Name</label> <select name="category_id" class="form-control" id="cars">

                                            <option selected value="<?php echo $rows["cat_id"]; ?>"><?php echo $rows["cat_name"]; ?>
       
                                            </option>

                                            <?php


                                            while ($cate_rows =  mysqli_fetch_assoc($category_resutl)) {

                                                ?>

                                            <option  value="<?php echo $cate_rows["id"]; ?>"><?php echo $cate_rows["name"]; ?>
                                                
                                            </option>

                                                    <?php

                                            }

                                            ?>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Feature Image</label> <input class="form-control" value="<?php echo $rows["feature_image"]; ?>" name="feature_image" placeholder="Enter Category Code" type="file">
                                    </div>

                                    <button class="btn btn-main-primary btn-block">Update</button>

                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- Footer opened -->
                    <?php

                    include("footer-section.php");

                    ?>

                    <!-- Footer closed -->

                </div>
                <!-- End Page -->

            <?php

            include("footer-script.php");
        } else {
            $msg = "Please Login, First";
            header("Location: login.php?msg=" . $msg);
        }

            ?>