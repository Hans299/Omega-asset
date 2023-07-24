<?= $this->extend('frontend/layouts/overview') ?>

<?= $this->section('content') ?>
<!-- Consult Us -->
<section>
    <div class="container hero-bar">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 class="omg-hero-title" style="font-size:60px; color: #1C375B; font-weight: bold;">
                        <?= lang("Contact.CH111") ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-row">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mb-5">
                <h1 class="font-weight-bold text-darkblue">Our Branches</h1>
                <ul class="list-styled">
                    <li>
                        <h5>Senopati, Jakarta</h5>
                    </li>
                    <li>
                        <h5>Pantai Indah Kapuk, Jakarta</h5>
                    </li>
                    <li>
                        <h5>Kelapa Gading, Jakarta</h5>
                    </li>
                    <li>
                        <h5>The Breeze, BSD</h5>
                    </li>
                    <li>
                        <h5>Riau Area, Bandung</h5>
                    </li>
                </ul>
            </div>
            <div class="col-md-7 form">
                <h1 class="font-weight-bold text-darkblue">Get in touch</h1>
                <p class="mb-5">Fill out the form for a free consultation!</p>
                <form id="form_contact">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="firstname" id="firstname" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" id="email" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Current Location</label>
                                <input type="text" class="form-control" name="city" id="city" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Study Destination</label>
                                <select name="destinationCountry" id="destinationCountry" class="form-control">
                                    <option value="">Select Study Destination</option>
                                    <option value="AU">Australia</option>
                                    <option value="CA">Canada</option>
                                    <option value="CH">China</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="SG">Singapore</option>
                                    <option value="UK">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="Other">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Period Intake</label>
                                <select name="periodIntake" id="periodIntake" class="form-control">
                                    <option value="">Period Intake</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Message</label>
                                <textarea type="text" class="form-control" name="content" id="content" placeholder="Your Message" rows="5" autocomplete="off"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        <large>By filling all the informations, you agree to be contacted by our expert consultant.</large>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="button" id="btnSave" class="btn btn-yellow btn-xs-block">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- //Consult Us -->

<?= $this->endSection() ?>
