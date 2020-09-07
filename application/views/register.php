<div class="container">
	<div class="row my-5">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3>User registration</h3>
				</div>
				<div class="panel-body">
					<form action="" method="post">
						<div class="form-group">
							<input type="text" id="name" name="name" placeholder="Full Name" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" id="username" name="username" placeholder="Username" class="form-control">
						</div>
						<div class="form-group">
							<input type="email" id="email" name="email" placeholder="Email Address" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" id="phone" name="phone" placeholder="Phone No" class="form-control">
						</div>
						<div class="form-group">
							<input type="password" id="password" placeholder="Password" name="password" class="form-control">
						</div>
						<button class="btn btn-primary btn-lg btn-block">Register</button>
					</form>
					<div class="text-danger"><?php echo validation_errors(); ?></div>
					<div class="text-success"><?php echo $this->session->flashdata('message'); ?></div>
				</div>
			</div>
		</div>
	</div>
</div>
