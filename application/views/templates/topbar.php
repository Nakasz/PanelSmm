
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <?php if ($users['email'] == true): ?>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Saldo -->
          <span class="nav-link"><i class="fas fa-funnel-dollar"></i> saldo : Rp.<?= number_format($users['balance'],0,',','.') ;?></span>
          <?php endif; ?>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
        
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $users['username'];?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile.png');?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
             <?php if ($users['email'] == true): ?>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Pengaturan Akun
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              <?php else : ?>
                <a class="dropdown-item" href="<?= base_url();?>">
                  <i class="fas fa-backward fa-sm fa-fw mr-2 text-gray-400"></i>
                  Kembali
                </a>
              <?php endif ;?>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
