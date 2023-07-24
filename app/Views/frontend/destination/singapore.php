<?= $this->extend('frontend/layouts/overview') ?>

<?= $this->section('content') ?>
<!-- banner section -->
<section style="background-image: url('<?= base_url('public/assets/images/destination/canada-view.jpg') ?>'); border-bottom-right-radius: 100px; background-size: cover; background-repeat: no-repeat; background-position: 50% 55%; height:400px;)">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-md-12">
                <div>
                    <h1 class="destination-title">
                    Singapore
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Living Cost & Requirement -->
<section class="section-row">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-7">
                <div class="lead">
                    Singapore is known as a country that has high quality educational institutions. Apart from 
                    high quality education, the reason many students choose this country is because it is close to Indonesia.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 d-md-block d-none">
                <img src="<?= base_url('public/assets/images/destination/singapore.png') ?>" class="img-destination">
            </div>
            <div class="col-md-7">
                <div class="destination-article">
                    <div class="destination-heading">
                        <h3>Why Singapore?</h3>
                    </div>
                    <div class="destination-paragraph">
                        <p>
                            1. The education offered is of international standard and of high quality. <br>
                            2. Singapore is known as a country with strict and transparent regulations. <br>
                            3. This city-state is beautifully laid out, neat, extremely clean and safe, and is supported by world-class technology and facilities.
                        </p>
                    </div>
                    <div class="destination-heading">
                        <h3>Living Cost in Singapore</h3>
                    </div>
                    <div class="destination-paragraph">
                        <p>
                            The living cost in Singapore varies greatly depending on your lifestyle and the city in which you live. 
                            The average living cost required by a student in Singapore generally ranges from SGD 1,500 to SGD 3,000 per month.
                            ranges from RM 1,300 to RM 3,500 per month. This fee includes : <br>
                            1. Residence <br>
                            2. Food <br>
                            3. Transportation <br>
                            4. Daily living expenses <br>
                        </p>
                    </div>
                    <div class="destination-heading">
                        <h3>Requirement</h3>
                    </div>
                    <div class="destination-paragraph">
                        <p>
                            To be able to enroll in an Singapore university, you need to meet a number of conditions, such as: <br>
                            1. Student Visa <br>
                            2. Health Insurance <br>
                            3. Accommodation <br>
                            4. IELTS <br>
                            5. Financial Evidence <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //Living Cost & Requirement -->

<section class="section-row d-md-block d-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading-left">
                    <h1>Other Countries</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 mb-sm-5 omg-col-mb-3">
                <a href="<?= base_url('/destination/australia') ?>">
                    <figure class="omg-hover-1">
                        <img src="<?= base_url('public/assets/images/destination/australia.png') ?>" class="img-fluid" alt="...">
                        <figcaption>
                            <h2>Australia</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-sm-5 omg-col-mb-3">
                <a href="<?= base_url('/destination/canada') ?>">
                    <figure class="omg-hover-1">
                        <img src="<?= base_url('public/assets/images/destination/canada.png') ?>" class="img-fluid" alt="...">
                        <figcaption>
                            <h2>Canada</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-sm-5 omg-col-mb-3">
                <a href="<?= base_url('/destination/china') ?>">
                    <figure class="omg-hover-1">
                        <img src="<?= base_url('public/assets/images/destination/china.png') ?>" class="img-fluid" alt="...">
                        <figcaption>
                            <h2>China</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-sm-5 omg-col-mb-3">
                <a href="<?= base_url('/destination/malaysia') ?>">
                    <figure class="omg-hover-1">
                        <img src="<?= base_url('public/assets/images/destination/malaysia.png') ?>" class="img-fluid" alt="...">
                        <figcaption>
                            <h2>Malaysia</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-sm-5 omg-col-mb-3">
                <a href="<?= base_url('/destination/new-zealand') ?>">
                    <figure class="omg-hover-1">
                        <img src="<?= base_url('public/assets/images/destination/newzealand.png') ?>" class="img-fluid" alt="...">
                        <figcaption>
                            <h2>New Zealand</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-sm-5 omg-col-mb-3">
                <a href="<?= base_url('/destination/singapore') ?>">
                    <figure class="omg-hover-1">
                        <img src="<?= base_url('public/assets/images/destination/singapore.png') ?>" class="img-fluid" alt="...">
                        <figcaption>
                            <h2>Singapore</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-sm-5 omg-col-mb-3">
                <a href="<?= base_url('/destination/united-kingdom') ?>">
                    <figure class="omg-hover-1">
                        <img src="<?= base_url('public/assets/images/destination/unitedkingdom.png') ?>" class="img-fluid" alt="...">
                        <figcaption>
                            <h2>United Kingdom</h2>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-sm-5 omg-col-mb-3">
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