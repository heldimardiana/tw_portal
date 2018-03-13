<div class="col-lg-12">
    <div class="card-box">
        <h3 class="m-t-0"><b>Add User</b></h3>                    
        <form action="#" method="post">
            <?php foreach($edit as $ed) {?>
            <div class="form-group">
                <label for="userName">Nik</label>
                <input type="text" name="nik" parsley-trigger="change" required class="form-control" readonly="" value="<?php echo $ed['user_nik']?>" id="nik">
            </div>
            <div class="form-group">
                <label for="emailAddress">First Name</label>
                <input type="text" name="f_name" parsley-trigger="change" required class="form-control" style="text-transform: uppercase;" value="<?php echo $ed['user_fname']?>" id="f_name">
            </div>
            <div class="form-group">
                <label for="emailAddress">Last Name</label>
                <input type="text" name="l_name" parsley-trigger="change" class="form-control" style="text-transform: uppercase;" value="<?php echo $ed['user_lname']?>" id="l_name">
            </div>
            <div class="form-group">
                <label for="emailAddress">Email</label>
                <input type="email" name="email" parsley-trigger="change" class="form-control" style="text-transform: lowercase;" value="<?php echo $ed['user_email']?>" id="email">
            </div>
            <?php } ?>
            <div class="form-group">
                <label for="emailAddress">Divisi</label>
                <select class="form-control" required="" name="divisi" id="divisi">
                    <option value="" disabled="" selected="">Choose Divisi</option>
                    <option value="1">Billing</option>
                    <option value="2">Operational</option>
                    <option value="3">System Integration</option>
                    <option value="4">Technical Writter</option>
                </select>
            </div>
            <div class="form-group text-right m-b-0">
                <button class="btn btn-primary waves-effect waves-light" type="button" onclick="save_edit();">
                    Submit
                </button>
                <button type="reset" class="btn btn-danger waves-effect waves-light m-l-5" onclick="hide_form_user();">
                    Cancel
                </button>
            </div>
            
        </form>
    </div>
</div>

<script type="text/javascript">
    var url_edit_user = "<?php echo site_url('save_edit_user')?>";
</script>
