<?php
$id=$_GET["id"];

include("cms-crud.php");
$query="SELECT * FROM user WHERE id=$id";
$result=cmsSecletByColumn($query);

$rows=mysqli_fetch_assoc($result);



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
									<p class="tx-12 tx-gray-500 mb-2">Example of Valex Bordered Table.. <a href="">Learn more</a></p>
								</div>
								<div class="card-body">
								<form action="./user/update-user.php" method="post">
								<input class="form-control" name="id" 
													value="<?php echo $rows ["id"];?>" placeholder="Enter your firstname and lastname" type="hidden">
                                                <div class="form-group">
                                                    <label>Firstname &amp; Lastname</label> <input class="form-control" name="fullname" 
													value="<?php echo $rows ["fullname"];?>" placeholder="Enter your firstname and lastname" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label> <input class="form-control" name="email"
													value="<?php echo $rows ["email"];?>" placeholder="Enter your email" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label> <input class="form-control" name="password"
													value="<?php echo $rows ["password"];?>" placeholder="Enter your password" type="password">
                                                </div><button class="btn btn-main-primary btn-block">Update</button>
                                                
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