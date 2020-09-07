<div class="container">
	<div class="row my-5">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>User login</h3>
				</div>
				<div class="panel-body">
					<form action="" method="post">
						<div class="form-group">
							<input type="text" id="email" name="identity" placeholder="Username/Email Address" class="form-control">
						</div>
						<div class="form-group">
							<input type="password" id="password" placeholder="Password" name="password" class="form-control">
						</div>
						<button class="btn btn-primary btn-lg btn-block">Login</button>
					</form>
					<div class="text-danger"><?php echo validation_errors(); ?></div>
				</div>
			</div>
		</div>
	</div>
</div>
