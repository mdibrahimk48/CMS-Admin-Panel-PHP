
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
                                    <h4 class="card-title mg-b-0">Bordered Table</h4>
                                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                                </div>
                                <p class="tx-12 tx-gray-500 mb-2"><a href="post-list.php">All Post</a></p>
                            </div>
                            <div class="card-body">
                                <form action="save-post.php" method="post" enctype="multipart/form-data">
                                    <input class="form-control" name="id" placeholder="Enter your firstname and lastname" type="hidden">
                                    <div class="form-group">
                                        <label>Post Title</label> <input class="form-control" name="title" placeholder="Enter Post Title" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Short Description</label> <input class="form-control" name="short_description" placeholder="Enter Short Description" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Long Description</label> 
                                        <textarea class="ckeditor" class="form-control" name="long_description" id="long_description" cols="30" rows="10"></textarea>
                                        <!-- <input class="ckeditor" class="form-control" name="long_description" placeholder="Enter Long Description" type="text"> -->
                                    </div>
                                    <div class="form-group">

                                        <label>Category Name</label> 
                                        
                                        <select name="category_id" class="form-control" id="cars">


                                            <?php
                                            include("cms-crud.php");
                                            $query = "SELECT * FROM category";
                                            $result = getAllDate($query);

                                            
                                            $serial = 1;
                                            ?>
                                            <option value="">-- SELECT ONE --</option>
                                            <?php
                                            while ($rows = mysqli_fetch_assoc($result)) {

                                            ?>
                                                <option value="<?php echo $rows["id"]; ?>"><?php echo $rows["name"]; ?></option>

                                            <?php
                                                $serial++;
                                            }

                                            ?>

                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label>Feature Image</label> <input class="form-control" name="feature_image" placeholder="Enter Feature Image" type="file">
                                    </div>

                                    <button class="btn btn-main-primary btn-block">Save</button>

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
            $msg = "Please Login, First!";
            header("Location: login.php?msg=" .$msg);
        }
            ?>