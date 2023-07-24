<?= $this->extend('frontend/register/layouts/overview') ?>

<?= $this->section('content') ?>
<!-- consults -->
<section class="text-darkblue">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="section-row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="row mb-5">
                                    <div class="col-md-12">
                                        <h4 class="font-weight-bold text-darkblue"><?= $event['event'] ?></h4>
                                    </div>
                                </div>
                                <form class="form-event" id="form-event">
                                    <div class="row">
                                        <input type="hidden" class="form-control" name="id_event" id="id_event" value="<?= $event['events_id'] ?>">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Student Name</label>
                                                <input type="text" class="form-control" name="studentName" id="studentName" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email" id="email" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="date" class="form-control" name="birthDate" id="birthDate" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address" id="address" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Current Education</label>
                                                <select class="form-control" name="currentEducation" id="currentEducation">
                                                    <option value=""> Current Level of Education </option>
                                                    <option value="SMA 1 / Year 10"> SMA 1 / Year 10 </option>
                                                    <option value="SMA 2 / Year 11"> SMA 2 / Year 11 </option>
                                                    <option value="SMA 3 / Year 12"> SMA 3 / Year 12 </option>
                                                    <option value="Secondary 4"> Secondary 4 </option>
                                                    <option value="Junior College 1"> Junior College 1 </option>
                                                    <option value="Junior College 2"> Junior College 2 </option>
                                                    <option value="Foundation / Diploma"> Foundation / Diploma </option>
                                                    <option value="Bachelor"> Bachelor </option>
                                                    <option value="Master"> Master </option>
                                                    <option value="Postgraduate"> Postgraduate </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>School / Institute</label>
                                                <input type="text" class="form-control" name="currentInstitute" id="currentInstitute" autocomplete="off">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Future Education</label>
                                                <select class="form-control" name="futureEducation" id="futureEducation">
                                                    <option value="">Select Education</option>
                                                    <option value="SMA 1 / Year 10"> SMA 1 / Year 10 </option>
                                                    <option value="SMA 2 / Year 11"> SMA 2 / Year 11 </option>
                                                    <option value="SMA 3 / Year 12"> SMA 3 / Year 12 </option>
                                                    <option value="Secondary 4"> Secondary 4 </option>
                                                    <option value="Junior College 1"> Junior College 1 </option>
                                                    <option value="Junior College 2"> Junior College 2 </option>
                                                    <option value="Foundation / Diploma"> Foundation / Diploma </option>
                                                    <option value="Bachelor"> Bachelor </option>
                                                    <option value="Master"> Master </option>
                                                    <option value="Postgraduate"> Postgraduate </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Future Major</label>
                                                <input type="text" class="form-control" name="futureMajor" id="futureMajor" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Study Destination</label>
                                                <select class="form-control" name="studyDestination" id="studyDestination">
                                                    <option value="">Select Study Destination</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="China">China</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Period Intake</label>
                                                <select class="form-control" name="periodIntake" id="periodIntake">
                                                    <option value="">Period Intake</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                </select>
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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //consults -->
<?= $this->endSection() ?>
