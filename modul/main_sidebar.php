<?php 
error_reporting(0);
?>

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  
<ul class="sidebar-menu">
<li class="header">MENU UTAMA</li>

<li <?= $_GET['page']=='daftar_pekerjaan' ? "class='active'" : '';?>>
<a href="?page=home"><i class="fa fa-list-ul "></i> <span>Daftar Lowongan Pekerjaan</span></a>
</li>

</ul>

</section>



