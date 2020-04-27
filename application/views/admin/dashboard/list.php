<?php
    $url = 'https://javah2h.com/api/connect/';

    $header = array(
    'h2h-userid: H1708',
    'h2h-key: keyAnda', // lihat hasil autogenerate di member area
    'h2h-secret: secretAnda', // lihat hasil autogenerate di member area
    );

    $data = array( 
    'inquiry' => 'S', // konstan
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $result = curl_exec($ch);

    echo $result;
?>

<!-- Main content -->
<section class="content">
</section>