
<div class="col-lg-12">
	<div class="card-box">
		<h2 class="m-t-0"><b>Share Document</b></h2>
		<p class="text-muted font-13 m-b-30">
            Share your documentation project
        </p>
                    
		<form role="form" method="post" action="<?php echo site_url('share_document_opera')?>" enctype="multipart/form-data">
			<?php foreach($d_file as $df) {?>
			<div class="form-group">
				<label for="userName">Project Name</label>
				<input type="hidden" name="id_document" value="<?php echo $df['id_document']?>">
				<input type="hidden" name="document_name" value="<?php echo $df['document_name']?>">
				<input type="text" name="project_name" parsley-trigger="change" class="form-control" value="<?php echo $df['project_name'] ?>" readonly>
			</div>
			<?php } ?>
			<div class="form-group">
				<label for="userName">Receiver Name</label>
				<input type="text" name="r_name" parsley-trigger="change" class="form-control" required="" style="text-transform: uppercase;">
			</div>
			<div class="form-group">
				<label for="userName">Sent to mail</label>
				<input type="email" name="email" parsley-trigger="change" class="form-control" required="" style="text-transform: lowercase;">
			</div>
			<div class="form-group text-right m-b-0">
				<button class="btn btn-primary waves-effect waves-light" type="submit">
					Send
				</button>
				<button type="reset" class="btn btn-danger waves-effect waves-light m-l-5">
					Cancel
				</button>
			</div>
			
		</form>
	</div>
</div>