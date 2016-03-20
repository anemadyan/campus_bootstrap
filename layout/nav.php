<!-- Static navbar -->
<nav class="navbar navbar-inverse navbar-static-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="index.php"><i class="fa fa-home"></i></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<!-- Start -->
				<?php $mdy -> getMenu(); ?>
				<!-- End -->
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!-- Start -->
				<?php $mdy -> getMenu2(); ?>
				<!-- End -->
			</ul>
		</div>
	</div>
</nav>
