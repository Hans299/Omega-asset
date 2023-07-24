<?= $this->extend('frontend/layouts/overview') ?>

<?= $this->section('content') ?>
<!-- Team Member -->
<section>
    <div class="container hero-bar">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 class="omg-hero-title" style="font-size:60px; color: #1C375B; font-weight: bold;">
                        <?= lang("Team.TH111") ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <?php foreach ($chiefs as $chief) : ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="team-picture">
                                    <img src="<?= $chief->path_picture ?>" alt="<?= $chief->fullname ?>">
                                    <a href="<?= base_url('/team/' . $chief->url_name . '') ?>">
                                        <span class="fa-solid fa-link"></span>
                                    </a>
                                </div>
                                <div class="team-caption">
                                    <h5><?= $chief->fullname ?></h5>
                                    <p><?= $chief->role ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row justify-content-center">
                    <?php foreach ($teams as $team) : ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="team-picture">
                                    <img src="<?= $team->path_picture ?>" alt="<?= $team->fullname ?>">
                                    <a href="<?= base_url('/team/' . $team->url_name . '') ?>">
                                        <span class="fa-solid fa-link"></span>
                                    </a>
                                </div>
                                <div class="team-caption">
                                    <h5><?= $team->fullname ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //Team Member -->
<?= $this->endSection() ?>
