<?= $this->extend('backend/leads/layouts/overview') ?>

<?= $this->section('content') ?>

<div class="container-fluid p-0">

  <div class="row mb-2 mb-xl-3">
    <div class="col-auto">
      <h3>Welcome back, <strong><?= session('first_name') ?></strong></h3>
    </div>

    <div class="col-auto ms-auto text-end">
      <a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-lg-7 col-xxl-8 d-flex">
      <div class="card flex-fill">
        <div class="card-body">
            <p class="status-flo">Your Status</p>

            <?php

            switch (session('status')) {
                case "1":
                    $status = "Unhandled";
                    break;
                case "2":
                    $status = "In Progress";
                    break;
                case "3":
                    $status = "Hot Prospect";
                    break;
                case "4":
                    $status = "Prospect";
                    break;
                case "5":
                    $status = "Future Prospect";
                    break;
                case "6":
                    $status = "Not Prospect";
                    break;
                case "7":
                    $status = "Apply";
                    break;
                case "8":
                    $status = "CLO";
                    break;
                case "9":
                    $status = "FLO";
                    break;
                case "10":
                    $status = "Paid";
                    break;
                case "11":
                    $status = "Visa";
                    break;
                case "12":
                    $status = "Visa Rejected";
                    break;
                case "13":
                    $status = "Goal";
                    break;
                case "14":
                    $status = "Declined";
                    break;
                case "15":
                    $status = "Cancelled";
                    break;
            }

            ?>

            <p class="fls"><?= $status ?></p>
        </div>
      </div>
    </div>
  </div>

</div>

<?= $this->endSection() ?>
