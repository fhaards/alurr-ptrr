<div class="card">
  <div class="card-body">

    <div class="row card-page-header">
      <div class="col-sm-6 col-xs-12">
        <div class="page-header text-left">
          <h1> Produk / Radioisotop <br>
            <small>Tabel Produk</small></h1>
        </div>
      </div>
      <div class="col-sm-6 col-xs-12">
        <div class="dropdown text-right">
            <button type="button" class="btn btn-primary" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                <i class="fa fa-plus-circle pr-3"></i>Tambah Produk Baru 
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="<?php echo base_url('produk/tambah-produk');?>"> Tambah Produk Aktif </a>
              <a class="dropdown-item" href="<?php echo base_url('produk/tambah-produk-na');?>"> Tambah Produk Non-Aktif </a>
            </div>
        </div>
      </div>
    </div>
    
    <div class="spacer20"></div>
    <?php $this->load->view('_partials/infoStatusProduk')?>
    <ul class="nav nav-tabs" role="tablist">
      	<li class="nav-item">
        	<a class="nav-link active"  data-toggle="tab"  href="#prdk-aktif">Produk Aktif</a>
      	</li>
      	<li class="nav-item">
        	<a class="nav-link"  data-toggle="tab"  href="#prdk-nonaktif">Produk Non-Aktif</a>
      	</li>
    </ul>

    <div class="tab-content">
    	<!--------- TAB PILLS LAPORAN AKTIF --------> 
      	<div class="tab-pane tab-pane active nopadding nomargin" id="prdk-aktif"> 
      		<?php require_once(APPPATH.'views/produk/r_prdk.php');?>
      	</div>

    	<!--------- TAB PILLS LAPORAN NONAKTIF --------> 
      	<div class="tab-pane tab-pane fade nopadding nomargin" id="prdk-nonaktif">
      			<?php require_once(APPPATH.'views/produk/rna_prdk.php');?>
      	</div>
    </div>
  </div>
</div>




