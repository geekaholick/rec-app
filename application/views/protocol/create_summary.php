<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
        <div class="content-body">
            <section>
                <div class="row">
                    <div class="col-xl-9 col-md-8 col-12">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex justify-content-between flex-md-row flex-column mt-0">
                                    <div>
                                        <h3 class="text-primary">Protocol Summary</h3>
                                        <p class="card-text mb-25"><span class="font-weight-bold">PROJECT TITLE:<br/></span> <?=$protocol[0]->title;?></p>
                                        
                                    </div>
                                    <div class="mt-md-0 mt-2">
                                        <h4>
                                            Protocol Number <span><?=$protocol[0]->protocolKey;?></span>
                                        </h4>
                                        <div>
                                            <p>Status: <span class="badge badge-pill badge-glow badge-primary"><?=$protocol[0]->status;?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <p class="card-text">List of information needed for the protocol submission.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="col-6">Information</th>
                                            <th class="col-3">Status</th>
                                            <th class="col-3">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($information as $info):
                                        ?>
                                        <tr>
                                            <td>
                                                <!-- <img src="../../../app-assets/images/icons/angular.svg" class="mr-75" height="20" width="20" alt="Angular" /> -->
                                                <span class="font-weight-bold"><?=$info->title;?></span>
                                            </td>
                                            <td><span class="<?=$info->class;?>"><?=$info->status;?></span></td>
                                            <td>
                                                <div>
                                                    <a href="<?php echo base_url().$info->link;?>">
                                                        <i data-feather="edit-2" class="mr-50"></i>Edit
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            <hr>
                            <div class="card-body">
                                <p class="card-text">
                                    Form List.
                                </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="col-6">Form</th>
                                            <th class="col-3">Status</th>
                                            <th class="col-3">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($forms as $form):
                                        ?>
                                        <tr>
                                            <td>
                                                <!-- <img src="../../../app-assets/images/icons/angular.svg" class="mr-75" height="20" width="20" alt="Angular" /> -->
                                                <span class="font-weight-bold"><?=$form->title;?></span>
                                            </td>
                                            <td><span class="<?=$form->class;?>"><?=$form->status;?></span></td>
                                            <td>
                                                <div>
                                                    <div>
                                                        <a href="javascript:void(0);">
                                                            <i data-feather="eye" class="mr-50"></i>
                                                            View
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                        <!-- Invoice Actions -->
                        <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-primary btn-block mb-75" data-toggle="modal" data-target="#send-invoice-sidebar">
                                        Submit Protocol 
                                    </button>
                                    <button class="btn btn-outline-secondary btn-block btn-download-invoice mb-75">Download</button>
                                    <a class="btn btn-outline-secondary btn-block mb-75" href="./app-invoice-print.html" target="_blank">
                                        Print
                                    </a>
                                    <a class="btn btn-outline-secondary btn-block mb-75" href="./app-invoice-edit.html"> Delete </a>
                                </div>
                            </div>
                        </div>
                        
                </div>
            </section>
        </div>
    </div>
</div>
