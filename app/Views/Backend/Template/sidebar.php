<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li <?php if ($halaman == "dashboard") echo "class='active'"; ?>><a href="index"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
			<li <?php if ($halaman == "widgets") echo "class='active'"; ?>><a href="widgets"><span class="glyphicon glyphicon-th"></span> Widgets</a></li>
			<li <?php if ($halaman == "charts") echo "class='active'"; ?>><a href="charts"><span class="glyphicon glyphicon-stats"></span> Charts</a></li>
			<li <?php if ($halaman == "tables") echo "class='active'"; ?>><a href="tables"><span class="glyphicon glyphicon-list-alt"></span> Tables</a></li>
			<li <?php if ($halaman == "forms") echo "class='active'"; ?>><a href="forms"><span class="glyphicon glyphicon-pencil"></span> Forms</a></li>
			<li <?php if ($halaman == "belajar-form") echo "class='active'"; ?>><a href="belajar-form"><span class="glyphicon glyphicon-pencil"></span> Forms</a></li>
			<li <?php if ($halaman == "form-sukses") echo "class='active'"; ?>><a href="form-sukses"><span class="glyphicon glyphicon-pencil"></span> Forms</a></li>
			<li <?php if ($halaman == "post-form") echo "class='active'"; ?>><a href="post-form"><span class="glyphicon glyphicon-pencil"></span> Forms</a></li>
			<li <?php if ($halaman == "panels") echo "class='active'"; ?>><a href="panels"><span class="glyphicon glyphicon-info-sign"></span> Alerts &amp; Panels</a></li>
			<li class="parent ">
				<a href="#">
					<span class="glyphicon glyphicon-list"></span> Dropdown <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login"><span class="glyphicon glyphicon-user"></span> Login Page</a></li>
		</ul>
		<div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a></div>
	</div><!--/.sidebar-->