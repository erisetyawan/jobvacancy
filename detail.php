<div class="pad margin no-print">
<div class="callout callout-info" style="margin-bottom: 0!important;">
<h1><i class="fa fa-info"></i> Informasi Lowongan Pekerjaan:</h1>
<h3><i class="fa fa-data"></i> Aplikasi bertujuan untuk Menampilkan Informasi Lowongan Pekerjaan dari Sosial Media Twitter </h3>
</div>
</div>

<!-- Content Header (Page header) -->

<!-- Main content -->
<section class="content">

<div class="row">
<div class="col-md-12">

<div class="box box-solid box-info">
<div class="box-header with-border">
<h3 class="box-title">Detail Lowongan Pekerjaan</h3>
</div>
<div class="box-body box-profile">
<div class="box-body">

<?php 

$id = isset($_GET['id']) ?  $_GET['id'] : '';

//$url = "localhost/twitterjobvacancy/api/job/read_one?token=d34a73ef5895b595fbc43fa129c538c3&id=".$id;
$url = "https://twitterjobvacancy.online/api/job/read_one?token=d34a73ef5895b595fbc43fa129c538c3&id=".$id;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$headers = array();
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$row = json_decode($result);

?>
<table id="example" class="table table-bordered table-hover table-striped">
<tbody>
<tr>
	<td style=""><left><b>Nama Pengguna</b></td>
	<td style=""><left> <?= $row->name;?></td>
</tr>
<tr>
	<td style=""><left><b>Lowongan Pekerjaan</b></td>
	<td style=""><left> <?= $row->text;?></td>
</tr>
<tr>
	<td style=""><left><b>Link Twitter</b></td>
	<td style=""><left><a href=<?= $row->link_twitter;?>><?= $row->link_twitter;?></a></td>
</tr>
<tr>
	<td style=""><left><b>Link Lainnya</b></td>
	<td style=""><left><a href=<?= $row->other_link;?>><?= $row->other_link;?></a></td>
</tr>
<tr>
	<td style=""><left><b>Lokasi</b></td>
	<td style=""><left> <?= $row->location;?></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>


