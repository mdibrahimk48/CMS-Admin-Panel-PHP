<?php
// $id=$_GET["id"];

// include("cms-crud.php");
// $query="SELECT * FROM user WHERE id=$id";
// $result=cmsSecletByColumn($query);

// $rows=mysqli_fetch_assoc($result);



// var_dump($result);
// exit();



?>

<?php
session_start();

if(isset($_SESSION ["username"])){



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
									<p class="tx-12 tx-gray-500 mb-2"><a href="category-list.php">All category</a></p>
								</div>
								<div class="card-body">
								<form action="save-category.php" method="post">
								<input class="form-control" name="id" 
													placeholder="Enter your firstname and lastname" type="hidden">
                                                <div class="form-group">
                                                    <label>Category Name</label> <input class="form-control" name="name" 
													placeholder="Enter Category Name" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>Category Code</label> <input class="form-control" name="code"
													 placeholder="Enter Category Code" type="text">
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
}

else{
	$msg="Please Login, First";
    header("Location: login.php?msg=".$msg);
}

	?>