<div class="row card-count">
    <div class="col-lg-12 mt-2 mb-3">
        <div class="page-header">
            <h1><small> Total Data </small></h1>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card card-laporan mb-2">
            <div class="card-body">
                <div class="text">
                    <div class="row">
                        <div class="col">
                            <h5>Total</h5>
                            <h4 class="subtitle">Laporan</h4>
                        </div>
                        <div class="col">
                            <h6>Aktif </h6>
                            <h1><?php echo $this->db->count_all('tb_serti'); ?></h1>
                        </div>
                        <div class="col">
                            <h6>Non Aktif</h6>
                            <h1><?php echo $this->db->count_all('tb_serti_na'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card card-produk mb-2">
            <div class="card-body">
                <div class="text">
                    <div class="row">
                        <div class="col">
                            <h5>Total</h5>
                            <h4 class="subtitle">Produk</h4>
                        </div>
                        <div class="col">
                            <h6>Aktif </h6>
                            <h1><?php echo $this->db->count_all('tb_bahan'); ?></h1>
                        </div>
                        <div class="col">
                            <h6>Non Aktif</h6>
                            <h1> <?php echo $this->db->count_all('tb_bahan_na'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card card-user mb-2">
            <div class="card-body">
                <div class="text">
                    <div class="row">
                        <div class="col">
                            <h5>Total</h5>
                            <h4 class="subtitle">User</h4>
                        </div>
                        <div class="col">
                            <h6>Operator</h6>
                            <h1><?php echo $this->db->count_all('tb_user'); ?></h1>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>