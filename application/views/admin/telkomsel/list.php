<!-- Main content -->
<section class="content">
<?php
//Notifikasi 
if($this->session->set_flashdata('sukses')){
    echo '<p class="alert alert-success">';
    echo $this->session->set_flashdata('sukses');
    echo '</div>';
}
?>
<div class="card">
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>TIPE</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pulsa</td>
                    <td>
                        <a href="<?php echo base_url('admin/telkomsel/pulsa') ?>" class="btn btn-success btn-xs">
                        <i class="fa fa-eye"></i> Lihat</a>
                    </td>
                </tr>
                <tr>
                    <td>Data</td>
                    <td>
                        <a href="<?php echo base_url('admin/telkomsel/data') ?>" class="btn btn-success btn-xs">
                        <i class="fa fa-eye"></i> Lihat</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</section>