<?= $this->extend('auth/partials/overview') ?>

<?= $this->section('content') ?>

<div class="container d-flex flex-column">
	<div class="row vh-100">
		<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
			<div class="d-table-cell align-middle">

				<div class="text-center mt-4">
					<a class="navbar-brand" href="<?= base_url('/') ?>">
						<img src="<?= base_url('public/assets/images/page/logo-omega.png') ?>" alt="Omega Education Group" style="height:60px; width: auto;">
					</a>
					<p class="lead">
						Reset Password
					</p>
				</div>

				<div class="card">
					<div class="card-body">
						<div class="m-sm-5">
							<form action="<?= base_url('/auth/forget-password')?>" method="post">
								<div class="mb-3">
									<label class="form-label">Email or Phone number</label>
									<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email or phone number" />
								</div>
								<div class="mb-3">
									<small>
										Already have an account ?<a href="<?= base_url('/auth/login')?>"> Sign in</a>
									</small>
								</div>
								<div class="text-center mt-3">
									<button type="submit" class="btn btn-lg btn-primary">Reset Password</button>
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
