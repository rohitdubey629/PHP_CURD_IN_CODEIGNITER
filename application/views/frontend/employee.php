
       
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <?php if($this->session->flashdata('status')): ?>
                <div class="alert alert-success">
                      <?= $this->session->flashdata('status'); ?>
                    </div>
                    <?php endif;?>
                    <h5>
                        Fetch data into database CodeIgniter
                       <a href="<?php echo base_url('employee/add')?>" class="btn btn-primary float-right" style="float:right";>Add Employee</a>
                    </h5>
                </div>
                <div class="card-body">
                       <table class="table table-border">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($employee->result() as $row): ?>
                            <tr>
                                <td> <?php echo $row->id?></td>
                                <td><?php echo $row->first_name?></td>
                                <td><?php echo $row->last_name?></td>
                                <td><?php echo $row->phone?></td>
                                <td><?php echo $row->email?></td>
                                <td>
                                    <a href="<?php echo base_url('employee/edit/'.$row->id)?>" class="btn btn-success btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('employee/delete/'.$row->id)?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                       </table>
                </div>
            </div>
        </div>
    </div>
</div>

