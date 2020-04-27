<?php 

    $username   = "082268186048";
    $apiKey   = "7265ca6091195377";
    $signature  = md5($username.$apiKey.'pl');

    $json = '{
            "commands" : "pricelist",
            "username" : "082268186048",
            "sign"     : "10252912de019b48f3fb7beea83a6c74"
            }';

    $url = "https://testprepaid.mobilepulsa.net/v1/legacy/index/pulsa/telkomsel";

    $ch  = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($data, true);
?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pulsa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            //Error Upload
            if(isset($error)){
                echo'<p class="alert alert-warning">';
                echo $error;
                echo '</p>';
            }

            // Notifikasi error
            echo validation_errors('<div class="alert alert-warning">','</div>');

            // Form Open
            echo form_open_multipart(base_url('admin/telkomsel/tambah'), 'class="form-horizontal"');
            ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Depan</label>
                        <input type="text" name="nama_depan" class="form-control" placeholder="Nama Depan">
                    </div>
                    <div class="form-group">
                        <label>Nama Belakang</label>
                        <input type="text" name="nama_belakang" class="form-control" placeholder="Nama Depan">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <input type="text" name="agama" class="form-control" placeholder="Agama">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>