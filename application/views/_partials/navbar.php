<nav class="navbar">
    <div class="container-fluid nb">
        <a href="" id="sidebarCollapse" class="navbar-toggler" data-toggle="collapse"  onclick="changeBar(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </a>

        <div class="dropdown dropleft userPage">
            <button type="button" class="btn btn-transparent btn-add text-primary" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user pr-2"></i>
                <small><?= getUserData()['nama_user']; ?></small>
            </button>
            <div class="dropdown-menu is-menu animated fadeInDown">
                <div class="container">

                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <div class="slider round"></div>
                        </label>
                        <span class="is-text"> Dark Mode</span>
                    </div>

                    <small>
                        Hi!<br>
                        <?= getUserData()['nama_user']; ?> <br>
                        <b>Anda adalah <?= getUserData()['level']; ?></b>
                    </small>
                    <hr>
                    <?php
                    if (isAdmin()) {
                    } else {
                    ?>
                        <a href="<?php echo base_url('user/'); ?>" class="btn btn-primary btn-sm" type="button" id="sidebarCollapse">
                            <i class="fa fa-user"></i> Profil
                        </a>
                    <?php } ?>
                    <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-dark btn-sm" type="button" id="sidebarCollapse">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                </div>
            </div>
        </div>

    </div>
</nav>