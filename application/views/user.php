<div class="container-fluid">
<div class="row d-flex justify-content-between align-items-center m-1">
<div class="modal-size-lg d-inline-block">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#large">
                                                Create User
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel17">New User</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                   
                                                                </div>
                                                                <div class="card-body">
                                                                
                                                                    <form class="form form-horizontal" method="POST" action="<?php echo base_url(); ?>add_user">
                                                                        <div class="row">
                                                                        <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-3 col-form-label">
                                                                                        <label for="email-id">Username</label>
                                                                                    </div>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" id="first-name" class="form-control" name="username" placeholder="Email" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-3 col-form-label">
                                                                                        <label for="first-name">Name</label>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <input type="text" id="first-name" class="form-control" name="fname" placeholder="First Name" />
                                                                                    </div>
                                                                                    <div class="col-sm-5">
                                                                                        <input type="text" id="first-name" class="form-control" name="lname" placeholder="Last Name" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-3 col-form-label">
                                                                                        <label for="email-id">Email</label>
                                                                                    </div>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="email" id="email-id" class="form-control" name="email" placeholder="Email" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                          
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-3 col-form-label">
                                                                                        <label for="password">Password</label>
                                                                                    </div>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="password" id="password" class="form-control" name="password" placeholder="Password" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group row">
                                                                                    <div class="col-sm-3 col-form-label">
                                                                                        <label for="password">User Type</label>
                                                                                    </div>
                                                                                    <div class="col-sm-9">
                                                                                        <select class="form-control" id="basicSelect" name="usertype">
                                                                                            <option value="1" selected>Regular</option>
                                                                                            <option value="2">Staff</option>
                                                                                            <option value="3">Reviewer</option>
                                                                                            <option value="4">Admin</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                           
                                                                            <div class="col-sm-9 offset-sm-3">
                                                                                <button type="submit" class="btn btn-success mr-1" name="submitUser"  value="1" >Submit</button>
                                                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
</div>
<div class="row d-flex justify-content-between align-items-center m-1">
<table class="table">
        <thead class="table-light" >
            <tr>
            <th scope="col">#</th>
            <th scope="col">username</th>
            <th scope="col">full name</th>
            <th scope="col">type</th>
            <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i=0;
                foreach($users as $user):
            ?>
                <tr>
                    <th scope="row"><?=++$i;?></th>
                    <td><?=$user->username;?></td>
                    <td><?php echo ucfirst($user->fname.' '.$user->lname);?></td>
                    <td>
                        <?php
                            switch($user->usertype){
                                case 1:
                                    echo '<span class="badge rounded-pill bg-info"> regular </span>';
                                    break;
                                  case 2:
                                    echo '<span class="badge rounded-pill bg-secondary"> staff </span>';
                                    break;
                                  case 3:
                                    echo '<span class="badge rounded-pill bg-success"> reviewer </span>';
                                    break;
                                  default:
                                    echo '<span class="badge rounded-pill bg-info"> admin </span>';
                            }
                        ?>
                    </td>
                    <td>
            
                        <form method="POST" action="<?php echo base_url(); ?>update_user">
                            <input type="hidden" name="userid" value="<?php echo $user->userid; ?>">
                            <button type="submit" class="btn btn-icon btn-flat-success waves-effect" name="submitedit" value="1" style="color:blue">
                                <i data-feather='edit-2'></i>
                            </button>
                        </form>
                                        
                        <form method="POST" action="<?php echo base_url(); ?>delete_user">
                            <input type="hidden" name="userid" value="<?php echo $user->userid; ?>">
                            <button type="submit" class="btn btn-icon btn-flat-warning waves-effect" name="active" value="0" style="color:blue">
                            <i data-feather='trash-2'></i>
                            </button>
                        </form>
                       
                
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>

</div>