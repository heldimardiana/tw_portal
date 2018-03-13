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

<div class="col-lg-12">
	<div class="card-box">
		<h2 class="m-t-0"><b>Upload Document</b></h2>
		<p class="text-muted font-13 m-b-30">
            Upload your documentation project
        </p>
                    
		<form role="form" method="post" action="<?php echo site_url('save_upload')?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="userName">Project Name</label>
				<input type="text" name="project_name" parsley-trigger="change" required class="form-control" style="text-transform: uppercase;">
			</div>
			<div class="form-group">
				<label for="emailAddress">Category</label>
				<select class="form-control" name="category" required="">
					<option value="" disabled="" selected="">Choose Category</option>
					<option value="1">Billing</option>
					<option value="2">Operational</option>
					<option value="3">System Integration</option>
				</select>
			</div>
			<div class="form-group">
				<label for="pass1">Document</label>
				<input type="file" required class="form-control" name="document" onchange="get_name();" id="document">
				<input type="hidden" id="doc" name="doc">
				<p style="font-size: 11px; color: red;">File must .zip / .rar and max 5mb</p>
			</div>
			<div class="form-group text-right m-b-0">
				<button class="btn btn-primary waves-effect waves-light" type="submit">
					Submit
				</button>
				<button type="reset" class="btn btn-danger waves-effect waves-light m-l-5">
					Cancel
				</button>
			</div>
			
		</form>
	</div>
</div>

<script type="text/javascript">
	function get_name(){
		var filename = $("#document").val();
		$("#doc").val(filename);
	}
</script>