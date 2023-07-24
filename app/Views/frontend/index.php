<?= $this->extend('frontend/layouts/overview') ?>

<?= $this->section('content') ?>
<!-- Banner -->
<section id="hero" class="bg-hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-left">
                <h1 class="p_heroHeading">
                    <?= lang("Home.HH111") ?> <br>
                    <?= lang("Home.HH112") ?>
                </h1>
                <p class="p_heroLead">
                    <?= lang("Home.HP11") ?> <br>
                    <?= lang("Home.HP12") ?>
                </p>
                <p>
                    <span class="span_heroBanner">#GoStudyAbroad</span>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Banner -->

<!-- Destination Omega -->
<section class="section-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h1>
                        <?= lang("Home.HH151") ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6 mb-sm-5 omg-col-mb-3">
                <a href="<?= base_url('/destination/australia') ?>">
                    <figure class="omg-hover-1">
                        <img src="<?= base_url('public/assets/images/destination/australia.png') ?>" class="img-fluid" alt="...">
                        <figcaption>
                            <h2>Australia</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-6 mb-sm-5 omg-col-mb-3">
                <a href="<?= base_url('/destination/canada') ?>">
                    <figure class="omg-hover-1">
                        <img src="<?= base_url('public/assets/images/destination/canada.png') ?>" class="img-fluid" alt="...">
                        <figcaption>
                            <h2>Canada</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-6 mb-sm-5 omg-col-mb-3">
                <a href="<?= base_url('/destination/china') ?>">
                    <figure class="omg-hover-1">
                        <img src="<?= base_url('public/assets/images/destination/china.png') ?>" class="img-fluid" alt="...">
                        <figcaption>
                            <h2>China</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-6 mb-sm-5 omg-col-mb-3">
                <a href="<?= base_url('/destination/malaysia') ?>">
                    <figure class="omg-hover-1">
                        <img src="<?= base_url('public/assets/images/destination/malaysia.png') ?>" class="img-fluid" alt="...">
                        <figcaption>
                            <h2>Malaysia</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-6 mb-sm-5 omg-col-mb-3">
                <a href="<?= base_url('/destination/new-zealand') ?>">
                    <figure class="omg-hover-1">
                        <img src="<?= base_url('public/assets/images/destination/newzealand.png') ?>" class="img-fluid" alt="...">
                        <figcaption>
                            <h2>New Zealand</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-6 mb-sm-5 omg-col-mb-3">
                <a href="<?= base_url('/destination/new-zealand') ?>">
                    <figure class="omg-hover-1">
                        <img src="<?= base_url('public/assets/images/destination/singapore.png') ?>" class="img-fluid" alt="...">
                        <figcaption>
                            <h2>Singapore</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-6 mb-sm-5 omg-col-mb-3">
                <a href="<?= base_url('/destination/new-zealand') ?>">
                    <figure class="omg-hover-1">
                        <img src="<?= base_url('public/assets/images/destination/unitedkingdom.png') ?>" class="img-fluid" alt="...">
                        <figcaption>
                            <h2>United Kingdom</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-6 mb-sm-5 omg-col-mb-3">
                <a href="<?= base_url('/destination/united-states') ?>">
                    <figure class="omg-hover-1">
                        <img src="<?= base_url('public/assets/images/destination/unitedstates.png') ?>" class="img-fluid" alt="...">
                        <figcaption>
                            <h2>United States</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Destination Omega -->

<!-- Why Omega -->
<section class="section-row bg-lightblue">
    <div class="container whyus-section">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="row">
                    <div class="col-md-6 my-auto">
                        <div class="section-heading-left">
                            <h1>
                                <?= lang("Home.HH121") ?>
                            </h1>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="card omg-service-card shadow-lg rounded-lg">
                            <div class="card-body m-md-3 m-0">
                                <div class="row">
                                    <div class="col-md-6 col-3">
                                        <img src="<?= base_url('public/assets/images/page/omega-scale-up.png') ?>" class="img-fluid" alt="...">
                                    </div>
                                    <div class="col-md-12 col-9">
                                        <h3 class="text-darkblue font-weight-bold mt-4 mb-md-4 mb-3">Edu Scale-Up</h3>
                                        <p class="card-text">
                                            Kembangkan diri anda melalui hardskills & soft skills sebelum masuk ke jenjang Universitas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-md-0 mb-5">
                        <div class="card omg-service-card shadow-lg rounded-lg">
                            <div class="card-body m-md-3 m-0">
                                <div class="row">
                                    <div class="col-md-6 col-3">
                                        <img src="<?= base_url('public/assets/images/page/omega-meta.png') ?>" class="img-fluid" alt="...">
                                    </div>
                                    <div class="col-md-12 col-9">
                                        <h3 class="text-darkblue font-weight-bold mt-4 mb-md-4 mb-3">Digital Psychometric</h3>
                                        <p class="card-text">
                                            Ini adalah tes kepribadian, pusat belajar, dan career portal dalam satu platform. Didukung oleh ilmu psikologi dan penelitian yang mendalam berdasarkan AI & Big Data.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card omg-service-card shadow-lg rounded-lg">
                            <div class="card-body m-md-3 m-0">
                                <div class="row">
                                    <div class="col-md-6 col-3">
                                        <img src="<?= base_url('public/assets/images/page/omega-buddy.png') ?>" class="img-fluid" alt="...">
                                    </div>
                                    <div class="col-md-12 col-9">
                                        <h3 class="text-darkblue font-weight-bold mt-4 mb-md-4 mb-3">Omega Buddy</h3>
                                        <p class="card-text">
                                            Omega Buddy akan membantu anda ketika anda sampai di negara tempat anda kuliah.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Omega -->

<!-- Process Omega -->
<section class="section-row">
    <div class="container">
        <div class="row row-flowchart">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="section-heading-left" style="margin-bottom: 0;">
                    <h1 class="text-white">
                        <?= lang("Home.HH131") ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="<?= base_url('public/assets/images/page/consult-flow.png') ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- Process Omega -->

<!-- Psychometric Omega -->
<section class="bg-psychometric">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 offset-lg-5 text-md-left text-center">
                <div class="psychometric-heading">
                    <h1>
                        <?= lang("Home.HH141") ?>
                    </h1>
                    <a href="<?= base_url('/register/ref/dreamtalent') ?>" class="btn btn-cta">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Psychometric Omega -->

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

<!-- Testimoni -->
<div class="section-row-small">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading-left">
                    <h1>
                        <?= lang("Home.HH1101") ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme testimony justify-content-center">
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
<!-- Testimoni -->

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



<!-- Blog Omega -->
<section class="section-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h1>Artikel</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($blog as $row) : ?>
                <div class="col-md-4 omg-col-mb-3">
                    <div class="card omg-blog-card shadow-lg rounded-lg">
                        <img src="<?= ($row->guid) ?>" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <a href="https://omegaedu.co.id/blog/<?= ($row->post_name . '') ?>" target="_blank" class="link">
                                <h5 class="card-title text-darkblue font-weight-bold"><?= $row->post_title ?></h5>
                            </a>
                            <p class="card-text"><?= substr($row->post_content, 0,97) . '...' ?></p>
                            <div class="d-flex justify-content-between mt-auto">
                                <div>
                                    <a href="https://omegaedu.co.id/blog/<?= ($row->post_name . '') ?>" target="_blank" class="link text-darkblue font-weight-bold">Read More</a>
                                </div>
                                <div>
                                    <span><?= date("j F Y", strtotime($row->post_date)) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row justify-content-center">
            <a href="https://omegaedu.co.id/blog" class="btn btn-cta mt-5">See All Article</a>
        </div>
    </div>
</section>
<!-- Blog Omega -->

<!-- Consult Us -->
<div class="section-consult">
    <div class="container">
        <div class="row">
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
