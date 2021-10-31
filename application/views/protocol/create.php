<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
        <div class="content-body">
            <!-- Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <form class="form needs-validation" method="POST" action="<?php echo base_url(); ?>protocols" novalidate>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Application Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="project-title">Project Title</label>
                                                <input type="text" id="project-title" class="form-control" name="title-column" required/>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter your project title.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7 col-12 mb-1">
                                            <label>Study Type (Select all that applies)</label>
                                            <select class="select2 form-control" multiple required>
                                                <?php
                                                    $i = 0;
                                                    foreach ($study_types as $study_type):
                                                ?>
                                                <option value="<?=$study_type->fieldKey;?>"><?=$study_type->description;?></option>
                                                <?php endforeach;?>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please select at least one.</div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="study-type-other">Others</label>
                                                <input type="text" id="study-type-other" class="form-control" placeholder="Others" name="study-type-column" />
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-12 mb-1">
                                            <label></label> <br/>
                                            <button type="button" class="btn btn-icon btn-warning">
                                                <i data-feather="inbox"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-4 form-group">
                                            <label for="start-date">Proposed Start Date</label>
                                            <input type="text" id="start-date" class="form-control pickadate-months-year" placeholder="" required/>
                                        </div>
                                        <div class="col-12 col-md-4 form-group">
                                            <label for="end-date">Proposed End Date</label>
                                            <input type="text" id="end-date" class="form-control pickadate-months-year" placeholder="" required/>
                                        </div>
                                        <div class="col-md-4 col-12 form-group">
                                            <label for="participants">Expected No. of Participant</label>
                                            <input type="text" id="participants" class="form-control" name="country-floating" placeholder="0" required/>  
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-12 form-group">
                                            <label for="study-site">Study Site</label>
                                            <input type="text" id="study-site" class="form-control" name="study-site-column" placeholder="" required/>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter study site.</div>
                                        </div>
                                        <div class="col-md-6 col-12 form-group">
                                            <label for="funds">Source of Funds</label>
                                            <input type="funds" id="email-id-column" class="form-control" name="funds-column" placeholder="" required/>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter source of funds.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Researcher / Proponents Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-md-7 col-12 mb-1">
                                            <label>Researcher</label>
                                            <select class="select2 form-control" multiple>
                                                <?php
                                                    $i = 0;
                                                    foreach ($users as $user):
                                                ?>
                                                <option value="<?=$user->userid;?>"><?=$user->fname;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Mailing Information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-1 custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked />
                                            <label class="custom-control-label" for="customCheck1">Use the current user mailing list.</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-12 form-group">
                                            <label for="mailing-address">Complete Address</label>
                                            <input type="text" id="mailing-address" class="form-control" name="address-column" />
                                        </div>
                                        <div class="col-md-4 col-12 form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" class="form-control" name="email-column" />
                                        </div>
                                        <div class="col-md-4 col-12 form-group">
                                            <label for="a-email">Aletrnative Email</label>
                                            <input type="email" id="a-email" class="form-control" name="a-email-column" />
                                        </div>
                                        <div class="col-md-4 col-12 form-group">
                                            <label for="mobile">Mobile Number</label>
                                            <input type="email" id="mobile" class="form-control" name="mobile-column" />
                                        </div>
                                        <div class="col-md-4 col-12 form-group">
                                            <label for="fax">Fax / Telephone</label>
                                            <input type="email" id="fax" class="form-control" name="fax-column" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class = "row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                        </div>
                    </div>
                </form>
            </section>
            <!-- Basic Floating Label Form section end -->
        </div>
    </div>
</div>
