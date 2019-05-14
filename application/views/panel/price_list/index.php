        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!--Table-->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <thead>
                     <tr>
                       <th>ID</th>
                       <th>KATEGORI</th>
                       <th>LAYANAN</th>
                       <th>HARGA/K</th>
                       <th>MIN. PESAN</th>
                       <th>MAX. PESAN</th>
                     </tr>
                   </thead>
                   <tfoot>
                     <tr>
                       <th>ID</th>
                       <th>KATEGORI</th>
                       <th>LAYANAN</th>
                       <th>HARGA/K</th>
                       <th>MIN. PESAN</th>
                       <th>MAX. PESAN</th>
                     </tr>
                   </tfoot>
                   <tbody>
                       <?php foreach($pricelist as $o ) : ?>
                       <tr>
                         <td><span class="badge badge-info"><?= $o['id'] ; ?></span></td>
                         <td><?= $o['name'] ; ?></td>
                         <td><?= $o['service_name'] ; ?></td>
                         <td>Rp.<?= number_format($o['price'],0,',','.') ;?></td>
                         <td><?= $o['min'] ; ?></td>
                         <td><?= $o['max'] ; ?></td>
                       </tr>
                       <?php endforeach ; ?>
                   </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
