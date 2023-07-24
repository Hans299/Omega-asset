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
                    <?php foreach ($events as $event) : ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="event-picture">
                                    <img src="<?= $event['bg_path'] ?>" alt="<?= $event['event'] ?>">
                                    <a href="<?= base_url('/event/' . $event['url_link'] . '') ?>">
                                        <span class="fa-solid fa-link"></span>
                                    </a>
                                </div>
                                <div class="event-caption">
                                    <h6><?= $event['event'] ?></h6>
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
