<?php if ($users['email'] == true): ?>
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('panel');?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Technobooks</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">
      
      <!-- Heading -->
      <div class="sidebar-heading">
        <?= $users['level'] ;?>
      </div>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('panel');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <?php if ($users['level'] == 'Admin'): ?>
      <!-- Nav Item - Admin Fitur -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin" aria-expanded="true" aria-controls="collapseAdmin">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Fitur Admin</span>
        </a>
        <div id="collapseAdmin" class="collapse" aria-labelledby="headingAdmin" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Feature Admin :</h6>
            <a class="collapse-item" href="<?= base_url('admin');?>">Dashboard Admin</a></a>
            <a class="collapse-item" href="<?= base_url('reseller');?>">Tambah Member</a>
            <a class="collapse-item" href="utilities-animation.html">Chart</a>
          </div>
        </div>
      </li>
      <?php endif;?>
      <?php if ($users['level'] <> 'Member'): ?>
      <!-- Nav Item - Reseller Fitur -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReseller" aria-expanded="true" aria-controls="collapseReseller">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Fitur Reseller</span>
        </a>
        <div id="collapseReseller" class="collapse" aria-labelledby="headingReseller" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Feature Reseller :</h6>
            <a class="collapse-item" href="<?= base_url('reseller');?>">Tambah Member</a></a>
            <a class="collapse-item" href="utilities-border.html">Download Bonus</a>
          </div>
        </div>
      </li> 
      <?php endif ;?>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        menu
      </div>

      <!-- Nav Item - Order Sosial Media -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-shopping-bag"></i>
          <span>Sosial Media</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Belanja Sekarang :</h6>
            <a class="collapse-item" href="<?= base_url('panel/order');?>">Pesan Baru</a></a>
            <a class="collapse-item" href="<?= base_url('panel/riwayat_order');?>">Riwayat</a>
          </div>
        </div>
      </li>
      
     <!-- Nav Item - Deposit -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDeposit" aria-expanded="true" aria-controls="collapseDeposit">
          <i class="fas fa-wallet"></i>
          <span>Deposit</span>
        </a>
        <div id="collapseDeposit" class="collapse" aria-labelledby="headingDeposit" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Deposit Sekarang :</h6>
            <a class="collapse-item" href="<?= base_url('panel/deposit');?>">Deposit Manual</a>
            <a class="collapse-item" href="utilities-animation.html">Redeem Voucher</a>
            <a class="collapse-item" href="<?= base_url('panel/riwayat_deposit');?>">Riwayat</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Help
      </div>
      
      <!-- Nav Item - Daftar Layanan -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/pricelist');?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Daftar Layanan</span></a>
      </li>
      
      <!-- Nav Item - Deposit -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTiket" aria-expanded="true" aria-controls="collapseTiket">
          <i class="fas fa-inbox"></i>
          <span>Tiket</span>
        </a>
        <div id="collapseTiket" class="collapse" aria-labelledby="headingTiket" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Buat Tiket :</h6>
            <a class="collapse-item" href="<?= base_url('panel/deposit');?>">Buat Tiket</a></a>
            <a class="collapse-item" href="<?= base_url('panel/riwayat_order');?>">Riwayat</a>
          </div>
        </div>
      </li>


      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-code"></i>
          <span>Api</span></a>
      </li>
      
      <!-- Nav Item - Lain Lain -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLain" aria-expanded="true" aria-controls="collapseLain">
          <i class="fas fa-globe"></i>
          <span>Lain Lain</span>
        </a>
        <div id="collapseLain" class="collapse" aria-labelledby="headingLain" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Buat Tiket :</h6>
            <a class="collapse-item" href="<?= base_url('panel/deposit');?>">Buat Tiket</a></a>
            <a class="collapse-item" href="<?= base_url('panel/riwayat_order');?>">Riwayat</a>
          </div>
        </div>
      </li>
      
      
      <!-- Nav Item - Logout -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout');?>">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
<?php endif; ?>