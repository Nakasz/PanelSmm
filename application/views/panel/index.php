
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <span class="mb-0 text-gray-800">Home > <?= $title; ?></span>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sticky-note fa-sm text-white-50"></i> Log penggunaan saldo</a>
          </div>
          <div class="row">
          <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Saldo</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.<?= number_format($users['balance'],0,',','.') ;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pesanan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.40,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Deposits</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.40,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-money-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Level</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $users['level'] ;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
            <div class="row">
                <div class="col-lg-7">
                <!-- Collapsable Card Example -->
                  <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapseCard" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard">
                      <h6 class="m-0 font-weight-bold text-primary">Selamat Datang</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="collapseCard">
                      <div class="card-body">
                        <center>Haii <b><?= $users['full_name'] ;?></b> Selamat Datang di technobooks.id layanan sosial media terlengkap di Indonesia. Baca aturan dan cara pakai agar Anda tidak salah dalam penggunaan system. Jika ada kendala silahkan hubungi Admin. <br/>
						<small><i> ~ Owner - Technobooks.id ~</i></small></center>
                      </div>
                    </div>
                  </div>
                  <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                      <h6 class="m-0 font-weight-bold text-primary">Informasi Terbaru</h6>
                    </a>
                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                   <thead>
                                     <tr>
                                       <th style="max-width:100px;">Tanggal/Waktu</th>
                                       <th>Konten</th>
                                     </tr>
                                   </thead>
                                   <tfoot>
                                     <tr>
                                       <th>Tanggal/Waktu</th>
                                       <th>Konten</th>
                                     </tr>
                                   </tfoot>
                                   <tbody>
                                    <?php foreach($news as $n) : ?>
                                    <tr>
                                      <td><?= $n['created_at'] ; ?></td>
                                      <td><?= $n['content'] ; ?></td>
                                    </tr>
                                    <?php endforeach ; ?>
                                   </tbody>
                                </table>
                              </div>
                            </div>
                    </div>
                  </div>
                  
                </div>
                
                <div class="col-lg-5">
                  <!-- Basic Card Example -->
                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                    </div>
                    <div class="card-body">
                      The styling for this basic card example is created by using default Bootstrap utility classes. By using utility classes, the style of the card component can be easily modified with no need for any custom CSS!
                    </div>
                  </div>
                </div>
            </div>
    


        </div>
        
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
