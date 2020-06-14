<div class="card">
  <div class="card-body">

      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <div class="page-header">
            <h1> Laporan Hasil Uji QC <br>
            <small>tabel laporan Sertifikat</small></h1>
          </div>
        </div>
        <div class="col-sm-6 col-xs-12">
          <div class="dropdown text-right">
            <button type="button" class="btn btn-primary btn-add" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
              <i class="fa fa-plus-circle pr-3"></i>Tambah Laporan Baru </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="<?php echo base_url('laporan/tambah-laporan');?>"> Tambah Laporan Aktif </a>
              <a class="dropdown-item" href="<?php echo base_url('laporan/tambah-laporan-na');?>"> Tambah Laporan Non-Aktif </a>
            </div>
          </div>
        </div>
      </div>
  
      <div class="spacer30"></div>
      
      <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active"  data-toggle="tab"  href="#lap-aktif">Laporan Aktif</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  data-toggle="tab"  href="#lap-nonaktif">Laporan Non-Aktif</a>
          </li>
       </ul>

      <div class="tab-content">
        <!--------- TAB PILLS LAPORAN AKTIF --------> 
          <div class="tab-pane tab-pane active nopadding nomargin" id="lap-aktif"> 
            <?php require_once(APPPATH.'views/laporan/a_read_lap.php');?>
          </div>

        <!--------- TAB PILLS LAPORAN NONAKTIF --------> 
          <div class="tab-pane tab-pane fade nopadding nomargin" id="lap-nonaktif">
            <?php require_once(APPPATH.'views/laporan/na_read_lap.php');?>
          </div>
      </div>


  </div>
</div>


