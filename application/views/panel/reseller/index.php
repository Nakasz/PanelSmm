        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <span class="mb-0 text-gray-800">Home > <?= $title; ?></span>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sticky-note fa-sm text-white-50"></i> Log penggunaan saldo</a>
          </div>
          <!--Alert-->
          <?= $this->session->flashdata('msg');?>
        <!-- Basic Card Example -->
        <div class="col-lg-7 mx-auto">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Rekan Sekarang</h6>
            </div>
            <div class="card-body">
            <form class="user" method="post" action="<?= base_url('reseller') ;?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Enter Full Name" value="<?= set_value('name') ; ?>">
                  <?= form_error('name','<small class="text-danger pl-3">','</small>') ;?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Enter Username" value="<?= set_value('username') ; ?>">
                  <?= form_error('username','<small class="text-danger pl-3">','</small>') ;?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email') ; ?>">
                  <?= form_error('email','<small class="text-danger pl-3">','</small>') ;?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1','<small class="text-danger pl-3">','</small>') ;?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Confirn Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Tambah Member
                </button>
              </form>
              <hr>
            </div>
          </div>
          </div>

        </div>
        
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
