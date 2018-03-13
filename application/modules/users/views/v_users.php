<?php
    if ($this->session->flashdata('success_message')!="")
    {
    ?>
    <div class="alert alert-success">
        <h3><center><?php echo $this->session->flashdata('success_message');  ?></center></h3>
    </div>
    <?php
    }
?>

<?php
    if ($this->session->flashdata('erorr_message')!="")
    {
    ?>
    <div class="alert alert-danger">
        <h3><center><?php echo $this->session->flashdata('erorr_message');  ?></center></h3>
    </div>
    <?php
    }
?>

<div class="col-lg-12" id="button_add">
    <button type="button" class="btn btn-primary waves-effect waves-light" onclick="form_user();">+ Add User</button>
</div>
<p>&nbsp;</p>
<div class="col-lg-12" style="display: none;" id="form_add">
    <div class="card-box">
        <h3 class="m-t-0"><b>Add User</b></h3>                    
        <form action="<?php echo site_url('save_add_user')?>" method="post">
            <div class="form-group">
                <label for="userName">Nik</label>
                <input type="text" name="nik" parsley-trigger="change" required class="form-control" style="text-transform: uppercase;">
            </div>
            <div class="form-group">
                <label for="emailAddress">First Name</label>
                <input type="text" name="f_name" parsley-trigger="change" required class="form-control" style="text-transform: uppercase;">
            </div>
            <div class="form-group">
                <label for="emailAddress">Last Name</label>
                <input type="text" name="l_name" parsley-trigger="change" class="form-control" style="text-transform: uppercase;">
            </div>
            <div class="form-group">
                <label for="emailAddress">Email</label>
                <input type="email" name="email" parsley-trigger="change" class="form-control" style="text-transform: lowercase;">
            </div>
            <div class="form-group">
                <label for="emailAddress">Divisi</label>
                <select class="form-control" required="" name="divisi">
                    <option value="" disabled="" selected="">Choose Divisi</option>
                    <option value="1">Billing</option>
                    <option value="2">Operational</option>
                    <option value="3">System Integration</option>
                    <option value="4">Technical Writter</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pass1">Password*</label>
                <input type="password" name="password" required class="form-control">
            </div>
            <div class="form-group text-right m-b-0">
                <button class="btn btn-primary waves-effect waves-light" type="submit">
                    Submit
                </button>
                <button type="reset" class="btn btn-danger waves-effect waves-light m-l-5" onclick="hide_form_user();">
                    Cancel
                </button>
            </div>
            
        </form>
    </div>
</div>


<div class="col-lg-12">
    <div class="card-box table-responsive">
        <h2 class="m-t-0"><b>Management User</b></h2>
        <table id="mydata" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th style="font-size: 12px;vertical-align: center;text-align: center;">NO</th>
                <th style="font-size: 12px;vertical-align: center;text-align: center;">NIK</th>
                <th style="font-size: 12px;vertical-align: center;text-align: center;">FIRST NAME</th>
                <th style="font-size: 12px;vertical-align: center;text-align: center;">LAST NAME</th>
                <th style="font-size: 12px;vertical-align: center;text-align: center;">EMAIL</th>
                <th style="font-size: 12px;vertical-align: center;text-align: center;">DIVISI</th>
                <th style="font-size: 12px;vertical-align: center;text-align: center;">ACTION</th>
            </tr>
            </thead>


            <tbody>
            <?php
            $n = 1;
            foreach($user as $us){ 
                $divisi = $us['user_level'];
                if($divisi === 1)
                {
                    $nama_divisi = "BILLING";
                }
                else if($divisi === 2)
                {
                    $nama_divisi = "OPERATIONAL";
                }
                else if($divisi === 3)
                {
                    $nama_divisi = "SYSTEM INTEGRATION";
                }
                else
                {
                    $nama_divisi = "TECHNICAL WRITTER";
                }
            ?>
            <tr>
                <td style="font-size: 10px;vertical-align: center;text-align: center;"><?php echo $n?></td>
                <td style="font-size: 10px;vertical-align: center;text-align: center;"><?php echo $us['user_nik']?></td>
                <td style="font-size: 10px;vertical-align: center;text-align: center;"><?php echo $us['user_fname']?></td>
                <td style="font-size: 10px;vertical-align: center;text-align: center;"><?php echo $us['user_lname']?></td>
                <td style="font-size: 10px;vertical-align: center;text-align: center;"><?php echo $us['user_email']?></td>
                <td style="font-size: 10px;vertical-align: center;text-align: center;"><?php echo $nama_divisi ?></td>
                <td style="font-size: 10px;vertical-align: center;text-align: center;">
                <?php $id = $us['user_nik'] ?>    
                    <a href="<?php echo site_url('edit_user/'.$id)?>">
                        <i class="glyphicon glyphicon-user" title="Edit"></i>
                    </a>
                    <a href="<?php echo site_url('delete_user/'.$id)?>">
                        <i class="glyphicon glyphicon-trash" title="Delete"></i>
                    </a>
                </td>
            </tr>
            <?php $n++; } ?>
            </tbody>
        </table>
    </div>
</div>

