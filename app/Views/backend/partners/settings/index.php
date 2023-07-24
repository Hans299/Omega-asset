<?= $this->extend('backend/layouts/overview') ?>

<?= $this->section('content') ?>

<div class="container-fluid p-0">

  <div class="row mb-2 mb-xl-3">
    <div class="col-auto d-none d-sm-block">
      <h3><strong>Settings</strong></h3>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-6 col-xxl d-flex">
      <div class="card flex-fill">
        <div class="card-body">
          <div class="row">
            <div class="col mt-0">
              <h5 class="card-title">Company Settings</h5>
            </div>

            <div class="col-auto">
              <div class="stat" style="">
                <i class="fa-solid fa-dollar-sign align-middle"></i>
              </div>
            </div>
          </div>
          <div class="mt-2">
            <a href="<?= base_url('/settings/company') ?>" class="btn btn-primary">More</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xxl d-flex">
      <div class="card flex-fill">
        <div class="card-body">
          <div class="row">
            <div class="col mt-0">
              <h5 class="card-title">Product Settings</h5>
            </div>

            <div class="col-auto">
              <div class="stat" style="">
                <i class="fa-solid fa-dollar-sign align-middle"></i>
              </div>
            </div>
          </div>
          <div class="mt-2">
            <a href="<?= base_url('/settings/product') ?>" class="btn btn-primary">More</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xxl d-flex">
      <div class="card flex-fill">
        <div class="card-body">
          <div class="row">
            <div class="col mt-0">
              <h5 class="card-title">Ticket Settings</h5>
            </div>

            <div class="col-auto">
              <div class="stat" style="background: #F7931A; color: white;">
                <i class="fa-solid fa-bitcoin-sign align-middle"></i>
              </div>
            </div>
          </div>
          <div class="mt-2">
            <a href="<?= base_url('/settings/ticket') ?>" class="btn btn-primary">More</a>
          </div>

        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-xxl d-flex">
      <div class="card flex-fill">
        <div class="card-body">
          <div class="row">
            <div class="col mt-0">
              <h5 class="card-title">User Settings</h5>
            </div>

            <div class="col-auto">
              <div class="stat" style="background: #345D9D; color: white;">
                <i class="fa-solid fa-litecoin-sign align-middle"></i>
              </div>
            </div>
          </div>
          <div class="mt-2">
            <a href="<?= base_url('/settings/user') ?>" class="btn btn-primary">More</a>
          </div>

        </div>
      </div>
    </div>
  </div>





</div>

<?= $this->endSection() ?>
