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
<h3 class="box-title">Daftar Lowongan Pekerjaan</h3>
</div>
<div class="box-body box-profile">
<div class="box-body">
<table id="example1" class="table table-bordered table-hover table-striped">
<thead>
<tr style="background-color: #ddd;">
<th width="1%"><center>No</th>
<th width="10%"><center>Nama</th>
<th width="25%"><center>Lowongan Pekerjaan</th>
<th width="5%"><center>Lokasi</th>
<th width="2%"><center>Tanggal Dibuat</th>
<th width="2%"><center>Detail</th>
</tr>
</thead>
<tbody>
<?php 

//$url = "localhost/twitterjobvacancy/api/job/read?token=d34a73ef5895b595fbc43fa129c538c3";
$url = "https://twitterjobvacancy.online/api/job/read?token=d34a73ef5895b595fbc43fa129c538c3";

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

$data = json_decode($result)->records;

?>
<?php
$no = 1;
foreach($data as $row){
?>
<tr>
<td style=""><center> <?= $no; ?></td>
<td style=""><center> <?= $row->name;?></td>
<td style=""><left> <?= $row->text;?></td>
<td style=""><center> <?= $row->location;?></td>
<td style=""><center> <?= $row->created;?></td>
<td>
<a href="<?= "?page=detail&id=".$row->id ?>" title="Edit Data"><center><i class="fa fa-edit fa-lg"></i></a>
</td>
<?php $no++;;}  ?>
</tbody>
</table>
</div>
</div>
</div>


