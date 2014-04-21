<nav class="navbar navbar-default" role="navigation">
  <div class="container">
	<div class="navbar-header">
	  <a class="navbar-brand nav-link" href="/"><?php echo Settings::get("website.name", false, "Pulpitum");?></a>
	</div> <!-- /.navbar-header -->

	<div class="collapse navbar-collapse navbar-ex1-collapse">
	<?php echo MenuDB::render("main", "bootstrap", "Pulpitum\Auth\Menu", "nav navbar-nav navbar-right");?>
	</div> <!-- /.navbar-collapse -->
  </div> <!-- /.container -->
</nav> <!-- /.navbar -->