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
    <div class="card-box table-responsive">
        <h2 class="m-t-0"><b>Operational Documentation</b></h2>
        <table id="mydata" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th style="font-size: 12px;vertical-align: center;text-align: center;">NO</th>
                <th style="font-size: 12px;vertical-align: center;text-align: center;">PROJECT NAME</th>
                <th style="font-size: 12px;vertical-align: center;text-align: center;">UPLOAD PIC</th>
                <th style="font-size: 12px;vertical-align: center;text-align: center;">UPLOAD DATE</th>
                <th style="font-size: 12px;vertical-align: center;text-align: center;">FILE</th>
                <th style="font-size: 12px;vertical-align: center;text-align: center;">ACTION</th>
            </tr>
            </thead>


            <tbody>
            <?php
            $n = 1;
            foreach($opera as $us){ 
                
            ?>
            <tr>
                <td style="font-size: 10px;vertical-align: center;text-align: center;"><?php echo $n?></td>
                <td style="font-size: 10px;vertical-align: center;text-align: center;"><?php echo $us['project_name']?></td>
                <td style="font-size: 10px;vertical-align: center;text-align: center;"><?php echo $us['user_nik']?> - <?php echo $us['user_fname']?></td>
                <td style="font-size: 10px;vertical-align: center;text-align: center;"><?php echo $us['upload_date']?></td>
                <td style="font-size: 10px;vertical-align: center;text-align: center;">
                    <?php $path = $us['document_name']; ?>
                    <a href="<?php echo base_url().'uploads/'.$path ?>" target="_blank">
                        <img src="<?php echo base_url()?>assets/file.png?>" style="width:25px;" title="Download"></img>
                    </a>  
                </td>
                <td style="font-size: 10px;vertical-align: center;text-align: center;">
                <?php $id = $us['id_document'] ?>  
                <a href="<?php echo site_url('share_file_opera/'.$id)?>">   
                    <button type="button" class="btn btn-dropbox waves-effect waves-light">
                        <i class="fa fa-dropbox" title="Share Documentation"></i>
                    </button>
                </a>
                </td>
            </tr>
            <?php $n++; } ?>
            </tbody>
        </table>
    </div>
</div>