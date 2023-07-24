<?= $this->extend('frontend/team/layouts/overview') ?>

<?= $this->section('content') ?>
<!-- Team Member -->
<div class="section-row" style="background-image: linear-gradient(#000000, #1C375B);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <div class="card bg-transparent">
                    <div class="card-body">
                        <a href="<?= base_url('/') ?>">
                            <img src="<?= base_url('public/assets/images/page/logo-omega_wy.png') ?>" class="fs-logo mb-3">
                        </a>
                        <h3 class="text-white mb-5">Let's Study <span style="background-color: #FFF051; color: #1C375B; font-size: 1.5rem; font-weight: bold; border-radius: 0.3rem; padding: 0rem 0.5rem 0rem 0.5rem;">Overseas</span></h3>
                        <div class="team-picture">
                            <img src="<?= base_url() ?>/<?= $member->path_picture ?>" alt="<?= $member->fullname ?>">
                        </div>
                        <div class="team-caption text-white">
                            <h1><?= $member->fullname ?></h1>
                            <p><?= $member->role ?></p>
                        </div>
                        <div>
                            <a href="https://api.whatsapp.com/send/?phone=6281290512261&text&app_absent=0" target="_blank" class="btn btn-block bg-palegreen font-weight-bold text-white mb-3">Whatsapp Me</a>
                            <a href="<?= base_url('/') ?>" class="btn btn-block bg-palegreen font-weight-bold text-white mb-3">Our Website</a>
                            <a href="https://www.instagram.com/omegaedu.id/" class="btn btn-block bg-palegreen font-weight-bold text-white mb-3">Our Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p style="color: #ccc; font-size: 12px;">
                    Copyright © 2022 Omega Education Group - All rights reserved.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- //Team Member -->
<?= $this->endSection() ?>
