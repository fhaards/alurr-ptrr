<?php $this->load->view('_partials/content_alert'); ?>

<div class="login-content animated slideInDown">
  <div class="jumbotron row">
    <div class="card left-box col-xs-12 col-lg-6 animated slideInUp">
      <div class="card-body">
        <h1 class="display-4">Selamat Datang</h1>
        <span class="spacer10"></span>
        <div class="img-logo">
          <object data="<?php echo base_url() . 'assets/images/logo_alurr/alurrLogo_FullBlue.svg'; ?>" class="img" type="image/svg+xml">
          </object>
          <img src="<?php echo base_url() . 'assets/images/logo_batan.png'; ?>" class="ml-auto img">
        </div>
        <footer>
          <small class="is-text mb-2 ml-5"><strong>PTRR 2020.</strong></small>
        </footer>
      </div>
    </div>

    <div class="card right-box col-xs-12 col-lg-6 animated slideInUp">
      <div class="card-body">
        <div class="page-header">
          <h1> Login </h1>
        </div>
        <div class="spacer10"></div>
        <?php echo validation_errors(); ?>
        <?php echo form_open('login'); ?>
          <div class="form-group mb-3">
            <label for="subject font-weight-bold">Email</label>
            <div class="input-group mb-3">
              <input type="email" class="form-control" name="email" placeholder="Email Address" data-msg="" />
            </div>
            <div class="validation"></div>
          </div>

          <div class="form-group">
            <label for="subject">Password</label>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="* * * * *" data-msg="Masukan Subjek kurang lebih 8 karakter" />
            </div>
            <div class="validation"></div>
          </div>

          <div class="spacer20"></div>
          <div class="form-group input-group">
            <button type="submit" name="login" class="btn btn-primary" value="Login">
              <i class="fa fa-sign-in"></i> Masuk
            </button>
          </div>
        <?php echo form_close(); ?>
        <div class="text-center">
          
        </div>
      </div>

    </div>
  </div>

</div>