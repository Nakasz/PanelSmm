        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <span class="mb-0 text-gray-800">Home > <?= $title; ?></span>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sticky-note fa-sm text-white-50"></i> Log penggunaan saldo</a>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-pencil"></i> Status Pesanan</h6>
            </div>
            <div class="card-body">
            <div class="alert alert-info">
			 <ul>
                <li style="margin-left: -20px;"><span class="text text-uppercase badge badge-warning"><i class="fas fa-info-circle"></i> pending </span> : Orderan sedang berada dalam antrian</li>
                <li style="margin-left: -20px;"><span class="text text-uppercase badge badge-info"><i class="fas fa-spinner"></i> processing </span> : Orderan sedang diproses</li>
                <li style="margin-left: -20px;"><span class="text text-uppercase badge badge-success"><i class="fas fa-check"></i> suksess </span> : Orderan telah sukses diterima oleh target</li>
                <li style="margin-left: -20px;"><span class="text text-uppercase badge badge-danger"><i class="fas fa-exclamation-triangle"></i> partial </span> : Orderan terkirim sebagian pada target (Saldo refund sebagian)</li>
                <li style="margin-left: -20px;"><span class="text text-uppercase badge badge-danger"><i class="fas fa-exclamation-triangle"></i> error </span> : Orderan gagal diterima oleh target (Saldo refund full)</li>
              </ul>
			</div>
            </div>
          </div>
          <!--Table-->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Riwayat Pesanan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <thead>
                     <tr>
                       <th>ID</th>
                       <th>TANGGAL/WAKTU</th>
                       <th>LAYANAN</th>
                       <th>DATA</th>
                       <th>JUMLAH</th>
                       <th>HARGA</th>
                       <th>STATUS</th>
                     </tr>
                   </thead>
                   <tfoot>
                     <tr>
                       <th>ID</th>
                       <th>TANGGAL/WAKTU</th>
                       <th>LAYANAN</th>
                       <th>DATA</th>
                       <th>JUMLAH</th>
                       <th>HARGA</th>
                       <th>STATUS</th>
                     </tr>
                   </tfoot>
                   <tbody>
                       <?php foreach($orders as $o ) : ?>
                       <tr>
                         <td><a href="" class="badge badge-info" data-toggle="modal" data-target="#detail"><?= $o['id'] ; ?></a></td>
                         <td><?= $o['created_at'] ; ?></td>
                         <td><?= $o['service_name'] ; ?></td>
                         <td><?= $o['data'] ; ?></td>
                         <td><?= $o['quantity'] ; ?></td>
                         <td>Rp.<?= number_format($o['price'],0,',','.') ;?></td>
                         <td>
                          <span class="badge badge-<?php if ($o['status'] == 'Pending'){echo"warning";} 
                         else if ($o['status'] == 'Error'){echo"danger";}
                         else if ($o['status'] == 'Processing'){echo"info";}
                         else if ($o['status'] == 'Partial'){echo"danger";}
                         else if ($o['status'] == 'Success'){echo"success";}
                         ; ?>">
                            <span class="icon text-white-50">
                            <?php if($o['status'] == 'Success') :?>
                            <i class="fas fa-check"></i>
                            <?php elseif ($o['status'] == 'Error') :?>
                            <i class="fas fa-exclamation-triangle"></i>
                            <?php elseif ($o['status'] == 'Processing') :?>
                            <i class="fas fa-spinner"></i>
                            <?php elseif ($o['status'] == 'Pending') :?>
                            <i class="fas fa-info-circle"></i>
                            <?php else :?>
                            <i class="fas fa-exclamation-triangle"></i>
                            <?php endif ;?>
                            </span>
                            <span class="text"><?= $o['status'] ; ?></span>
                          </span>
                        </td>
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
      
        <!-- Modal -->
        <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="detailTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="detailTitle"><i class="fas fa-info-circle"></i> Detail Pesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <td><?= $o['created_at'] ; ?></td>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>