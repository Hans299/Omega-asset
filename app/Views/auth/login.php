<?= $this->extend('auth/partials/overview') ?>

<?= $this->section('content') ?>

<div class="container d-flex flex-column">
	<div class="row vh-100">
		<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
			<div class="d-table-cell align-middle">
				<div class="card">
					<div class="card-body">
						<div class="text-center mt-4">
							<a class="navbar-brand" href="<?= base_url('/') ?>">
								<img src="<?= base_url('public/assets/images/page/logo-omega.png') ?>" alt="Omega Education Group" style="height:60px; width: auto;">
							</a>
							<p class="lead">
								Sign in to your account to continue
							</p>
						</div>
						<div class="m-sm-5">
							<form action="<?= base_url('/auth/login')?>" method="post">
								<div class="mb-3">
									<label class="form-label">Username</label>
									<input class="form-control form-control-lg" type="username" name="username" placeholder="Enter your username" required/>
								</div>
								<div class="mb-3">
									<label class="form-label">Password</label>
									<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" required/>
									<small>
										<a href="<?= base_url('/auth/forget-password')?>">Forgot password?</a>
									</small>
								</div>
								<div>
									<label class="form-check">
										<input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
										<span class="form-check-label">
											Remember me next time
										</span>
									</label>
								</div>
								<div class="text-center mt-3">
									<button type="submit" class="btn btn-lg btn-primary">Sign in</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?= $this->endSection() ?>
