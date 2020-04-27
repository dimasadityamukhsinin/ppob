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
<!-- Main content -->
<section class="content">
<div class="card">
    <div class="card-body">
        <p>
            <?php include('tambah.php') ?>
        </p>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KODE PULSA</th>
                    <th>NOMINAL</th>
                    <th>HARGA</th>
                    <th>MASA AKTIF</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
		    <?php $no=1; foreach($result['data'] as $result) { ?> 
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $result['pulsa_code'] ?></td>
                    <td><?php echo $result['pulsa_nominal'] ?></td>
                    <td><?php echo "Rp.", number_format($result['pulsa_price'],'0',',','.'); ?></td>
                    <td><?php echo $result['masaaktif'] ?></td>
                    <td><?php echo $result['status'] ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</section>