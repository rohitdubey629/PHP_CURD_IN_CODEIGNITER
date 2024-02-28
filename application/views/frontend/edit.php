
       
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h5>
                       Update employee page
                       <a href="<?php echo base_url('employee')?>" class="btn btn-danger float-right" style="float:right";>Back</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('employee/update/'.$employee->id)?>" method="POST">
                        <div class="form-group">
                            <lable>First Name</lable>
                            <input type="text" name="first_name" value="<?= $employee->first_name ?>" class="form-control">
                            <span><?php echo form_error('first_name'); ?></span>
                        </div>
                        <div class="form-group">
                            <lable>Last Name</lable>
                            <input type="text" name="last_name" value="<?= $employee->last_name ?>" class="form-control">
                            <span><?php echo form_error('last_name'); ?></span>
                        </div>
                        <div class="form-group">
                            <lable>Phone Number</lable>
                            <input type="text" name="phone" value="<?= $employee->phone ?>" class="form-control">
                            <span><?php echo form_error('phone'); ?></span>
                        </div>
                        <div class="form-group">
                            <lable>Email</lable>
                            <input type="text" name="email" value="<?= $employee->email ?>" class="form-control">
                            <span><?php echo form_error('email'); ?></span>
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
            </div>
            </div>
        </div>
    </div>
</div>

