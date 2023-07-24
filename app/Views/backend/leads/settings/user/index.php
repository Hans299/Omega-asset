<?= $this->extend('backend/layouts/overview') ?>

<?= $this->section('content') ?>

<div class="container-fluid p-0">

  <div class="row mb-2 mb-xl-3">
    <div class="col-auto d-none d-sm-block">
      <h3><strong>User Settings</strong></h3>
    </div>
  </div>
  <div class="row">

    <div class="col-12 col-md-4 col-xxl d-flex">
      <div class="card flex-fill">
        <a href="<?= base_url('/settings/user/departments') ?>">
          <div class="card-body">
            <div class="row">
              <div class="col-auto">
                <div class="stat" style="">
                  <i class="align-middle" data-feather="award"></i>
                </div>
              </div>
              <div class="col mt-2">
                <h5 class="card-title">Department Settings</h5>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-12 col-md-4 col-xxl d-flex">
      <div class="card flex-fill">
        <a href="<?= base_url('/settings/user/locations') ?>">
          <div class="card-body">
            <div class="row">
              <div class="col-auto">
                <div class="stat" style="">
                  <i class="align-middle" data-feather="grid"></i>
                </div>
              </div>
              <div class="col mt-2">
                <h5 class="card-title">Location Settings</h5>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-12 col-md-4 col-xxl d-flex">
      <div class="card flex-fill">
        <a href="<?= base_url('/settings/user/roles') ?>">
          <div class="card-body">
            <div class="row">
              <div class="col-auto">
                <div class="stat" style="">
                  <i class="align-middle" data-feather="list"></i>
                </div>
              </div>
              <div class="col mt-2">
                <h5 class="card-title">Roles Settings</h5>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-12 col-md-4 col-xxl d-flex">
      <div class="card flex-fill">
        <a href="<?= base_url('/settings/user/user-roles') ?>">
          <div class="card-body">
            <div class="row">
              <div class="col-auto">
                <div class="stat" style="">
                  <i class="align-middle" data-feather="file"></i>
                </div>
              </div>
              <div class="col mt-2">
                <h5 class="card-title">User Roles Settings</h5>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>


</div>

<?= $this->endSection() ?>
