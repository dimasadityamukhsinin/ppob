<?php
$json = '{
		          "commands" : "pricelist",
		          "username" : "082268186048",
		          "sign"     : "10252912de019b48f3fb7beea83a6c74"
		        }';

		$url = "https://testprepaid.mobilepulsa.net/v1/legacy/index/data/indosat_paket_internet";

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
<table border="1">
	<thead>
		<tr>
			<th>NO</th>
			<th>Kode Pulsa</th>
			<th>Operator Pulsa</th>
			<th>Nominal Pulsa</th>
			<th>Harga Pulsa</th>
			<th>Tipe Pulsa</th>
			<th>Masa Aktif</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($result['data'] as $result) { ?> 
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $result['pulsa_code'] ?></td>
				<td><?php echo $result['pulsa_op'] ?></td>
				<td><?php echo $result['pulsa_op'] ?></td>
				<td><?php echo $result['pulsa_op'] ?></td>
				<td><?php echo $result['pulsa_op'] ?></td>
				<td><?php echo $result['pulsa_op'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>