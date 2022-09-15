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

				<!-- breadcrumb -->
				<?php

				include("breadcrumb.php");

				?>
				<!-- /breadcrumb -->

				<!-- row -->

				<!-- row closed -->
				<?php

				include("at-glance.php");

				?>
				<!-- row opened -->
				<?php

				include("chart-report.php");

				?>
				<!-- row closed -->

				<!-- row opened -->
				<?php

				include("recent-activity.php");

				?>
				<!-- row close -->

				<!-- row opened -->
				<?php

				include("table-report.php");

				?>

				<!-- /row -->
			</div>
			<!-- /Container -->
		</div>
		<!-- /main-content -->

		<!-- Sidebar-right-->
		<?php

		include("right-sidebar.php");

		?>

		<!--/Sidebar-right-->

		<!-- Message Modal -->
		<?php

		include("message-modal.php");

		?>

		<!--Video Modal -->
		<?php

		include("video-modal.php");

		?>

		<!-- modal -->

		<!-- Audio Modal -->
		<?php

		include("audio-modal.php");

		?>

		<!-- modal -->

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