<?= $this->extend('frontend/layouts/overview') ?>

<?= $this->section('content') ?>
<!-- Abous Us -->
<section>
    <div class="container hero-bar">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 class="omg-hero-title" style="font-size:60px; color: #1C375B; font-weight: bold;">
                        <?= lang("About.AH111") ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12 about-caption">
                <p>
                    Omega Education Group is the first education group provide solution for all Indonesian student needs. On top of that, we also provide full
                    consultation services on overseas studies based on student’s passion, skills, financial capacity and match their education to the future 
                    challenges of industry demands. We fully support end to end education services through our digital ecosystem platform.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mx-auto omg-col-mb-3">
                <div class="card bg-green omg-services-card shadow-lg rounded-lg">
                    <img src="<?= base_url('public/assets/images/group/logo-oce.png') ?>" class="card-img-top" style="padding:1rem 1rem 0 1rem" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="color: #1C375B; font-size: 18px;">End-to-end personalized education services, counseling, and coachingfor your higher education learning that fits your talents and potential.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mx-auto omg-col-mb-3">
                <div class="card bg-purple omg-services-card shadow-lg rounded-lg">
                    <img src="<?= base_url('public/assets/images/group/logo-ode.png') ?>" class="card-img-top" style="padding:2rem 1rem 0 1rem" alt="...">
                    <div class="card-body" style="margin-top: -1rem;">
                        <p class="card-text" style="color: #1C375B; font-size: 18px;">An integrated digital transformation services to enhance your competitive advantage.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mx-auto omg-col-mb-3">
                <div class="card bg-orange omg-services-card shadow-lg rounded-lg">
                    <img src="<?= base_url('public/assets/images/group/logo-ob.png') ?>" class="card-img-top" style="padding:2rem 1rem 0 1rem" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="color: #1C375B; font-size: 18px;">A comprehensive financial solutions to make your education dream comes true.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //About Us -->

<!-- Team Member -->
<div class="section-row bg-team-member">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="section-heading">
                    <h1>
                        <?= lang("About.AH112") ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <?php foreach ($chiefs as $chief) : ?>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="team-picture">
                                    <img src="<?= $chief->path_picture ?>" alt="<?= $chief->fullname ?>">
                                </div>
                                <div class="team-caption">
                                    <h5><?= $chief->fullname ?></h5>
                                    <p><?= $chief->role ?></p>
                                    <p class="text-justify" style="font-size: 1.125rem;"><?= $chief->description ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <a href="<?= base_url('team') ?>" class="btn btn-darkblue" style="font-size: 1.25rem; border-radius: 0.75rem; padding: 0.5rem 1.5rem 0.5rem 1.5rem;">Load more</a>
            </div>
        </div>
    </div>
</div>
<!-- //Team Member -->

<!-- Branches -->
<section class="section-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading-left">
                    <h1>
                        <?= lang("Home.HH161") ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme branch">
                <div class="item">
                    <div class="card">
                        <img src="<?= base_url('public/assets/images/branch/Senopati.png') ?>" alt="" class="card-img branch-image">
                        <div class="branch-title">
                            <h5>Senopati, Jakarta</h5>
                        </div>
                        <div class="branch-description">
                            <p><b>Graha Tirtadi - 2nd Floor</b>,</p><p>Jl. Senopati No. 71-75, RT 8/RW 3, Selong, Kec. Kby. Baru, Kota Jakarta Selatan, DKI Jakarta 12110</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="<?= base_url('public/assets/images/branch/PIK.png') ?>" alt="" class="card-img branch-image">
                        <div class="branch-title">
                            <h5>PIK, Jakarta</h5>
                        </div>
                        <div class="branch-description">
                            <p><b>PIK Avenue - Level 6</b>,</p><p>Jl. Pantai Indah Kapuk, Kamal Muara, Kec. Penjaringan, Kota Jkt Utara, DKI Jakarta 14470</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="<?= base_url('public/assets/images/branch/KGD.png') ?>" alt="" class="card-img branch-image">
                        <div class="branch-title">
                            <h5>Kelapa Gading, Jakarta</h5>
                        </div>
                        <div class="branch-description">
                            <p><b>Menara Satu 1st Floor (Kriya Coworking Space)</b>,</p><p>Jl. Boulevard Raya LA3 No. 1 RT 11/RW 18, Kec. Klp. Gading, Kota Jkt Utara, DKI Jakarta 14240</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="<?= base_url('public/assets/images/branch/BSD.png') ?>" alt="" class="card-img branch-image">
                        <div class="branch-title">
                            <h5>The Breeze, BSD</h5>
                        </div>
                        <div class="branch-description">
                            <p><b>BSD Green Office Park</b>,</p><p>Jl. BSD Grand Boulevard, Sampora, BSD, Tangerang, Banten 15345</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="<?= base_url('public/assets/images/branch/Bandung.png') ?>" alt="" class="card-img branch-image">
                        <div class="branch-title">
                            <h5>Riau Area, Bandung</h5>
                        </div>
                        <div class="branch-description">
                            <p>Jl. LLRE Martadinata No. 86 (Seberang Nanny's Pavillion), Cihapit, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40114</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Branches -->

<!-- Partnership -->
<div class="section-row-small">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading-left">
                    <h1>
                        <?= lang("Home.HH171") ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center justify-content-between text-center">
            <div class="col-md-2 col-12">
                <img src="<?= base_url('public/assets/images/partner/logo-ppi.png') ?>" class="logo-partner">
            </div>
            <div class="col-md-2 col-6">
                <img src="<?= base_url('public/assets/images/partner/logo-asia.png') ?>" class="logo-partner">
            </div>
            <div class="col-md-2 col-6">
                <img src="<?= base_url('public/assets/images/partner/logo-mgbkdki.png') ?>" class="logo-partner">
            </div>
            <div class="col-md-2 col-6">
                <img src="<?= base_url('public/assets/images/partner/logo-bankbjb.png') ?>" class="logo-partner">
            </div>
            <div class="col-md-2 col-6">
                <img src="<?= base_url('public/assets/images/partner/logo-bankdbs.png') ?>" class="logo-partner">
            </div>
        </div>
        <div class="row d-flex align-items-center justify-content-between text-center">
            <div class="col-md-4 col-6">
                <img src="<?= base_url('public/assets/images/partner/logo-dreamtalent.png') ?>" class="logo-partner2">
            </div>
            <div class="col-md-4 col-6">
                <img src="<?= base_url('public/assets/images/partner/logo-schoters.png') ?>" class="logo-partner2">
            </div>
            <div class="col-md-4 col-6">
                <img src="<?= base_url('public/assets/images/partner/logo-lister.png') ?>" class="logo-partner2">
            </div>
            <div class="col-md-4 col-6">
                <img src="<?= base_url('public/assets/images/partner/logo-ieltspresso.png') ?>" class="logo-partner2">
            </div>
            <div class="col-md-4 col-6">
                <img src="<?= base_url('public/assets/images/partner/logo-westwood.png') ?>" class="logo-partner2">
            </div>
            <div class="col-md-4 col-6">
                <img src="<?= base_url('public/assets/images/partner/logo-lingotalk.png') ?>" class="logo-partner2">
            </div>
        </div>
    </div>
</div>
<!-- //Partnership-->

<!-- Featured -->
<div class="section-row-small bg-lightblue">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-heading-featured">
                    <h3>
                        <?= lang("Home.HH181") ?>
                    </h3>
                </div>
            </div>
            <div class="col-md-9">
                <div class="owl-carousel owl-theme featured justify-content-center">
                    <div class="item">
                        <a href="https://www.detik.com/edu/edutainment/d-5738556/bantu-mahasiswa-di-luar-negeri-sandiaga-uno-resmikan-aplikasi-ppi-dunia" target="_blank">
                            <img src="<?= base_url('public/assets/images/featured/detik.png') ?>" class="img-fluid omg-grayscale" alt="logo-detik">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://edukasi.kompas.com/read/2021/09/29/192005171/ppi-dunia-mobile-app-beri-perlindungan-bagi-mahasiswa-indonesia-di-luar" target="_blank">
                            <img src="<?= base_url('public/assets/images/featured/kompas.png') ?>" class="img-fluid omg-grayscale" alt="logo-kompas">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.timesindonesia.co.id/read/news/371841/resmikan-aplikasi-ppi-dunia-sandiaga-uno-gunakan-untuk-kemaslahatan-bangsa" target="_blank">
                            <img src="<?= base_url('public/assets/images/featured/times.png') ?>" class="img-fluid omg-grayscale" alt="logo-times">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://kumparan.com/biro-pers-media-informasi-ppi-dunia/sandiaga-uno-resmikan-aplikasi-ppi-dunia-untuk-pelajar-indonesia-di-luar-negeri-1waIHsYGun2" target="_blank">
                            <img src="<?= base_url('public/assets/images/featured/kumparan.png') ?>" class="img-fluid omg-grayscale" alt="logo-kumparan">
                        </a>
                    </div>
                    <div class="item">
                        <img src="<?= base_url('public/assets/images/featured/ragam.png') ?>" class="img-fluid omg-grayscale" style="margin-top:10px" alt="logo-ragam">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Featured -->

<!-- Consult Us -->
<div class="section-consult">
    <div class="container">
        <div class="row row-consult">
            <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
                <h1 class="font-weight-bold mb-3">
                    Ready to chase your dreams ?
                </h1>
                <h3>
                    Konsultasikan kebutuhan edukasi anda pada tim konsultan kami yang sudah berpengalaman.
                </h3>
            </div>
            <div class="col-md-4 text-center text-md-right my-auto">
                <div class="col-12 mb-2">
                    <a href="<?= base_url('/register/ref/marketing') ?>" class="btn btn-yellow p-2" style="border-radius: 30px; width:180px; font-size:18px; font-weight:bold;">Apply Online</a>
                </div>
                <div class="col-12">
                    <a href="https://api.whatsapp.com/send/?phone=6281290512261&text&app_absent=0" class="btn text-white p-2" style="background-color:#33c733; border-radius: 30px; width:180px; font-size:18px; font-weight:bold;"><i class="fa-brands fa-whatsapp fa-lg"></i> Chat Now!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Consult Us -->
<?= $this->endSection() ?>
