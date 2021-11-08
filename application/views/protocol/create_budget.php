<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row"></div>
        <div class="content-body">
            <section class="form-control-repeater">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Section 1: Personnel Services</h4>
                            </div>
                            <div class="card-body">
                                <div class="repeater-default">
                                    <div data-repeater-list="budegt1">
                                        <?php
                                            foreach ($section1 as $particular): 
                                        ?>
                                        <div data-repeater-item>
                                            <div class="row d-flex align-items-end">
                                                <div class="col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label for="itemname">Particulars</label>
                                                        <input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="" value="<?=$particular->particular;?>"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="itemcost">Personal</label>
                                                        <input type="number" class="form-control" id="itemcost" aria-describedby="itemcost" placeholder="0" />
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="itemquantity">External Source</label>
                                                        <input type="number" class="form-control" id="itemquantity" aria-describedby="itemquantity" placeholder="0" />
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="itemquantity">Interval Source</label>
                                                        <input type="number" class="form-control" id="itemquantity" aria-describedby="itemquantity" placeholder="0" />
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12 mb-50">
                                                    <div class="form-group">
                                                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                                                            <i data-feather="x" class="mr-25"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                                <i data-feather="plus" class="mr-25"></i>
                                                <span>Add New</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Section 2: Maintenance and Other Operating Expenses (MOOE)</h4>
                            </div>
                            <div class="card-body">
                                <div class="repeater-default">
                                    <div data-repeater-list="budegt2">
                                        <?php
                                            foreach ($section2 as $particular): 
                                        ?>
                                        <div data-repeater-item>
                                            <div class="row d-flex align-items-end">
                                                <div class="col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label for="itemname">Particulars</label>
                                                        <input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="" value="<?=$particular->particular;?>"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="itemcost">Personal</label>
                                                        <input type="number" class="form-control" id="itemcost" aria-describedby="itemcost" placeholder="0" />
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="itemquantity">External Source</label>
                                                        <input type="number" class="form-control" id="itemquantity" aria-describedby="itemquantity" placeholder="0" />
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="itemquantity">Interbal Source</label>
                                                        <input type="number" class="form-control" id="itemquantity" aria-describedby="itemquantity" placeholder="0" />
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12 mb-50">
                                                    <div class="form-group">
                                                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                                                            <i data-feather="x" class="mr-25"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                                <i data-feather="plus" class="mr-25"></i>
                                                <span>Add New</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Section 3: Capital Outlay</h4>
                            </div>
                            <div class="card-body">
                                <div class="repeater-default">
                                    <div data-repeater-list="budegt3">
                                        <div data-repeater-item>
                                            <div class="row d-flex align-items-end">
                                                <div class="col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label for="itemname">Particulars</label>
                                                        <input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="itemcost">Personal</label>
                                                        <input type="number" class="form-control" id="itemcost" aria-describedby="itemcost" placeholder="0" />
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="itemquantity">External Source</label>
                                                        <input type="number" class="form-control" id="itemquantity" aria-describedby="itemquantity" placeholder="0" />
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="itemquantity">Interbal Source</label>
                                                        <input type="number" class="form-control" id="itemquantity" aria-describedby="itemquantity" placeholder="0" />
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12 mb-50">
                                                    <div class="form-group">
                                                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                                                            <i data-feather="x" class="mr-25"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                                <i data-feather="plus" class="mr-25"></i>
                                                <span>Add New</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Section 4: Administrative Cost</h4>
                            </div>
                            <div class="card-body">
                                <div class="repeater-default">
                                    <div data-repeater-list="budegt4">
                                        <div data-repeater-item>
                                            <div class="row d-flex align-items-end">
                                                <div class="col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label for="itemname">Particulars</label>
                                                        <input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="itemcost">Personal</label>
                                                        <input type="number" class="form-control" id="itemcost" aria-describedby="itemcost" placeholder="0" />
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="itemquantity">External Source</label>
                                                        <input type="number" class="form-control" id="itemquantity" aria-describedby="itemquantity" placeholder="0" />
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <div class="form-group">
                                                        <label for="itemquantity">Interbal Source</label>
                                                        <input type="number" class="form-control" id="itemquantity" aria-describedby="itemquantity" placeholder="0" />
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12 mb-50">
                                                    <div class="form-group">
                                                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                                                            <i data-feather="x" class="mr-25"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                                <i data-feather="plus" class="mr-25"></i>
                                                <span>Add New</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>