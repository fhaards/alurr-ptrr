<nav id="sidebar" class="active">
    <h1>
        <object data="<?php echo base_url() . 'assets/images/logo_alurr/alurrLogo_Blue.svg'; ?>" class="logo img" type="image/svg+xml">
        </object>
        <object data="<?php echo base_url() . 'assets/images/logo_alurr/alurrLogo_FullBlue.svg'; ?>" class="logo2 img" type="image/svg+xml">
        </object>
    </h1>
    <?php
    $hal = $this->uri->segment(1);
    $hal2 = $this->uri->segment(2);
    ?>
    <ul class="list-unstyled components mb-5">
        <li class="<?= ($hal == 'homepage') ? 'active' : ''; ?>">
            <a href="<?= base_url(); ?>homepage">
                <span class="fa fa-home"   title='Home'></span>
                <span class="text">Home</span></a>
        </li>

        <li class="<?= ($hal == 'produk') ? 'active' : ''; ?>">
            <a href="#prodSubmenu" class="dropdown-sidebar" data-toggle="collapse" aria-expanded="false">
                <span class="fa fa-flask"   title='Produk'></span>
                <span class="text">Produk</span></a>

            <ul class="collapse list-unstyled" id="prodSubmenu">
                <li class="<?= ($hal2 == 'produk-list') ? 'active' : ''; ?>" >
                    <a href="<?= base_url(); ?>produk/produk-list" class="text" title="Produk List"> 
                        <span class="fa fa-file"></span> 
                        <span class="text"> List Product </span>
                    </a>
                </li>
                <li class="<?= ($hal2 == 'tambah-produk') ? 'active' : ''; ?>">
                    <a href="<?= base_url(); ?>produk/tambah-produk" class="text" title="Tambah Produk Aktif"> 
                        <span class="fa fa-plus"></span> 
                        <span class="text">Product Aktif </span>
                    </a>
                </li>
                <li class="<?= ($hal2 == 'tambah-produk-na') ? 'active' : ''; ?>">
                    <a href="<?= base_url(); ?>produk/tambah-produk-na" title="Tambah Produk NonAktif"> 
                        <span class="fa fa-plus"></span> 
                        <span class="text"> Product Non Aktif </span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="<?= ($hal == 'laporan') ? 'active' : ''; ?>">
            <a href="#lapSubmenu" class="dropdown-sidebar" data-toggle="collapse" aria-expanded="false">
                <span class="fa fa-copy material-tooltip-main"></span>
                <span class="text">Laporan Uji QC</a>
            
            <ul class="collapse list-unstyled" id="lapSubmenu">
                <li class="<?= ($hal2 == 'laporan-list') ? 'active' : ''; ?>">
                    <a href="<?= base_url(); ?>laporan/laporan-list"  class="text"  title="Laporan List"> 
                        <span class="fa fa-file"></span> 
                        <span class="text"> List Laporan </span>
                    </a>
                </li>
                <li class="<?= ($hal2 == 'tambah-laporan') ? 'active' : ''; ?>">
                    <a href="<?= base_url(); ?>laporan/tambah-laporan" class="text"  title="Tambah Laporan Aktif"> 
                        <span class="fa fa-plus"></span> 
                        <span class="text">Laporan Aktif </span>
                    </a>
                </li>
                <li class="<?= ($hal2 == 'tambah-laporan-na') ? 'active' : ''; ?>"  title="Tambah Laporan NonAktif">
                    <a href="<?= base_url(); ?>laporan/tambah-laporan-na" > 
                        <span class="fa fa-plus"></span> 
                        <span class="text"> Laporan Non Aktif </span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="<?= ($hal == 'tabel-peluruhan') ? 'active' : ''; ?>">
            <a href="<?= base_url(); ?>tabel-peluruhan">
                <span class="fa fa-book"   title='Tabel Peluruhan'></span>
                <span class="text">Tabel Peluruhan</span></a>
        </li>

        <li class="<?= ($hal == 'penandatangan') ? 'active' : ''; ?>">
            <a href="<?= base_url(); ?>penandatangan">
                <span class="fa fa-pencil material-tooltip-main"   title='Penandatangan'></span>
                <span class="text">Penandatangan</a>
        </li>

        <li class="<?= ($hal == 'radpro-calculator') ? 'active' : ''; ?>">
            <a href="<?= base_url(); ?>radpro-calculator">
                <span class="fa fa-calculator"   title='Rad Pro Calculator'></span>
                <span class="text">Rad Pro Calculator</span></a>
        </li>

        <li class="<?= ($hal == 'user') ? 'active' : ''; ?>">
            <a href="<?= base_url(); ?>user">
                <span class="fa fa-user"   title=''></span>
                <span class="text">User</span></a>
        </li>
    
        <?php
        if (isAdmin()) {
        ?>
            <li class="<?= ($hal == 'log-activity') ? 'active' : ''; ?>">
                <a href="<?= base_url(); ?>log-activity">
                    <span class="fa fa-history"   title='Log Activity'></span>
                    <span class="text">Log Activity</span></a>
            </li>
        <?php
        }
        ?>
    </ul>
</nav>