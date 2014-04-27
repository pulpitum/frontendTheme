<nav class="navbar navbar-default" role="navigation">
  <div class="container">
	<div class="navbar-header">
	  <a class="navbar-brand nav-link" href="/"><?php echo Settings::get("website.name", false, "Pulpitum");?></a>
	</div> <!-- /.navbar-header -->

	<form class="navbar-form navbar-left">
        <div class="input-group input-group-sm" style="max-width:360px;">
          <input type="text" data-provide="typeahead" class="form-control typeahead" placeholder="Search" name="srch-term" id="srch-term">
        </div>
    </form>

	<div class="collapse navbar-collapse navbar-ex1-collapse">
	<?php echo MenuDB::render("main", "bootstrap", "Pulpitum\Auth\Menu", "nav navbar-nav navbar-right");?>
	</div> <!-- /.navbar-collapse -->
  </div> <!-- /.container -->
</nav> <!-- /.navbar -->