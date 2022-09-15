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
										<h4 class="card-title mg-b-0">
                                        <?php
                                                if(isset($_GET ["msg"])){
                                                    echo $_GET ["msg"];
                                                }
                                                

                                                ?>
                                        </h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2"><a href="add-category.php">Add New Category</a></p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
											<thead>
												<tr>
													<th class="border-bottom-0">SL NO</th>
													<th class="border-bottom-0">Category Name</th>
													<th class="border-bottom-0">Category Code</th>
													<th class="border-bottom-0">Action</th>
												
												</tr>
											</thead>
											<tbody>


                                            <?php
                                            include("cms-crud.php");
                                            $query="SELECT * FROM category";
                                            $result=getAllDate($query);

                                            // $rows=mysqli_fetch_assoc($result);
                                            $serial=1;

                                           
                                            
                                            while($rows=mysqli_fetch_assoc($result)){




                                                ?>
                                                                                                                                              <tr>
                                                    <td><?php echo $serial; ?></td>
                                                    <td><?php echo $rows  ["name"]; ?></td>
                                                    <td><?php echo $rows  ["code"]; ?></td>
                                                    <td><a href="category-update.php?id=<?php echo $rows["id"];?>" rel="noopener noreferrer">Update</a> || <a href="category-delete.php?id=<?php echo $rows["id"];?>" target="_blank" 
                                                    onclick="return confirm('Are you sure you want to delete this item?');"
                                                    rel="noopener noreferrer">Delete</a></td>
                                                    <td></td>
                                                </tr>

                                                <?php
                                                 $serial++;

                                            }
                                            
                                            
                                            ?>

                                              

                                            </tbody>
										</table>
									</div>
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