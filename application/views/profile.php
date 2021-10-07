<div class="app-content content ">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between align-items-center m-1">
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h2 class="content-header-title float-left mb-0">Manage Your Profile</h2>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                                        <li class="breadcrumb-item active"> User Profile</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
                <div class="content-body">
                    <!-- account setting page -->
                    <section id="page-account-settings">
                        <div class="row">
                            <!-- left menu section -->
                            <div class="col-md-3 mb-2 mb-md-0">
                                <ul class="nav nav-pills flex-column nav-left">
                                    <!-- general -->
                                    <li class="nav-item">
                                        <a class="nav-link active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                            <i data-feather="user" class="font-medium-3 mr-1"></i>
                                            <span class="font-weight-bold">General</span>
                                        </a>
                                    </li>
                                    <!-- change password -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                            <i data-feather="lock" class="font-medium-3 mr-1"></i>
                                            <span class="font-weight-bold">Change Password</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--/ left menu section -->

                            <!-- right content section -->
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <!-- general tab -->
                                            <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                            <!-- form -->
                                                <form class="validate-form mt-2" method="POST" action="<?php echo base_url(); ?>update_user">
                                                    <input type="hidden" value="<?php echo $userdetail->userid; ?>" name="userid">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="account-username">Username</label>
                                                                <input type="text" class="form-control" id="account-username" name="username" placeholder="username" value="<?php echo $userdetail->username; ?>" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-name">First Name</label>
                                                                <input type="text" class="form-control" id="account-name" name="fname" placeholder="Name" value="<?php echo $userdetail->fname; ?>" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-name">Last Name</label>
                                                                <input type="text" class="form-control" id="account-name" name="lname" placeholder="Name" value="<?php echo $userdetail->lname; ?>" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="account-e-mail">E-mail</label>
                                                                <input type="email" class="form-control" id="account-e-mail" name="email" placeholder="Email" value="<?php echo $userdetail->email; ?>" />
                                                            </div>
                                                        </div>

                                                        <?php if($_SESSION['level']==4) {?>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-company">User Type</label>
                                                                <select class="form-control" id="basicSelect" name="usertype">
                                                                    <option value="1" <?php if($userdetail->usertype == 1) echo "selected"; ?>>Regular</option>
                                                                    <option value="2" <?php if($userdetail->usertype == 2) echo "selected"; ?>>Staff</option>
                                                                    <option value="3" <?php if($userdetail->usertype == 3) echo "selected"; ?>>Reviewer</option>
                                                                    <option value="4" <?php if($userdetail->usertype == 4) echo "selected"; ?>>Admin</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        <?php
                                                        if(isset($update)){
                                                            if($update){
                                                        ?>
                                                        <div class="col-12 mt-75">
                                                            <div class="alert alert-success mb-50" role="alert">
                                                                <h4 class="alert-heading"> Records updated successfully! </h4>
                                                            </div>
                                                        </div>
                                                        <?php  }else{
                                                        ?>
                                                        <div class="col-12 mt-75">
                                                            <div class="alert alert-warning mb-50" role="alert">
                                                                <h4 class="alert-heading"> Failed update! </h4>
                                                            </div>
                                                        </div>

                                                        <?php
                                                        }
                                                        }
                                                        ?>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-success mt-2 mr-1">Save changes</button>
                                                            <button type="reset" class="btn btn-outline-danger mt-2">Reset</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--/ form -->
                                            </div>
                                            <!--/ general tab -->

                                            <!-- change password -->
                                            <div class="tab-pane fade" id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                                <!-- form -->
                                                <form class="validate-form">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-old-password">Old Password</label>
                                                                <div class="input-group form-password-toggle input-group-merge">
                                                                    <input type="password" class="form-control" id="account-old-password" name="password" placeholder="Old Password" />
                                                                    <div class="input-group-append">
                                                                        <div class="input-group-text cursor-pointer">
                                                                            <i data-feather="eye"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-new-password">New Password</label>
                                                                <div class="input-group form-password-toggle input-group-merge">
                                                                    <input type="password" id="account-new-password" name="new-password" class="form-control" placeholder="New Password" />
                                                                    <div class="input-group-append">
                                                                        <div class="input-group-text cursor-pointer">
                                                                            <i data-feather="eye"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-retype-new-password">Retype New Password</label>
                                                                <div class="input-group form-password-toggle input-group-merge">
                                                                    <input type="password" class="form-control" id="account-retype-new-password" name="confirm-new-password" placeholder="New Password" />
                                                                    <div class="input-group-append">
                                                                        <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary mr-1 mt-1">Save changes</button>
                                                            <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--/ form -->
                                            </div>
                                            <!--/ change password -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ right content section -->
                        </div>
                    </section>
                    <!-- / account setting page -->
                </div>
            </div>
        </div>
    </div>
</div>