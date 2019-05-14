        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <span class="mb-0 text-gray-800">Home > <?= $title; ?></span>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sticky-note fa-sm text-white-50"></i> Log penggunaan saldo</a>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-pencil"></i> Status Deposit</h6>
            </div>
            <div class="card-body">
            <div class="alert alert-info">
			 <ul>
                <li style="margin-left: -20px;"><span class="text text-uppercase badge badge-warning"><i class="fas fa-info-circle"></i> pending </span> : Deposit sedang berada dalam antrian</li>
                <li style="margin-left: -20px;"><span class="text text-uppercase badge badge-success"><i class="fas fa-check"></i> suksess </span> : Deposit telah sukses diterima</li>
                <li style="margin-left: -20px;"><span class="text text-uppercase badge badge-danger"><i class="fas fa-exclamation-triangle"></i> error </span> : Deposit gagal diterima</li>
              </ul>
			</div>
            </div>
          </div>
          <!--Table-->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Riwayat Deposit</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <thead>
                     <tr>
                       <th>ID</th>
                       <th>TANGGAL/WAKTU</th>
                       <th>PEMBAYARAN</th>
                       <th>JENIS</th>
                       <th>METODE</th>
                       <th>JUMLAH BAYAR</th>
                       <th>SALDO DITERIMA</th>
                       <th>KETERANGAN</th>
                       <th>STATUS</th>
                     </tr>
                   </thead>
                   <tfoot>
                     <tr>
                       <th>ID</th>
                       <th>TANGGAL/WAKTU</th>
                       <th>PEMBAYARAN</th>
                       <th>JENIS</th>
                       <th>METODE</th>
                       <th>JUMLAH BAYAR</th>
                       <th>SALDO DITERIMA</th>
                       <th>KETERANGAN</th>
                       <th>STATUS</th>
                     </tr>
                   </tfoot>
                   <tbody>
                       <?php foreach($deposits as $o ) : ?>
                       <tr>
                         <td><a href="" class="badge badge-info"><?= $o['id'] ; ?></a></td>
                         <td><?= $o['created_at'] ; ?></td>
                         <td>Transfer <?= $o['payment'] ; ?></td>
                         <td><?= $o['type'] ; ?></td>
                         <td><?= $o['method_name'] ; ?></td>
                         <td>Rp.<?= number_format($o['post_amount'],0,',','.') ;?></td>
                         <td>Rp.<?= number_format($o['amount'],0,',','.') ;?></td>
                         <td><?= $o['note'] ; ?></td>
                         <td>
                          <span class="badge badge-<?php if ($o['status'] == 'Pending'){echo"warning";} 
                         else if ($o['status'] == 'Error'){echo"danger";}
                         else if ($o['status'] == 'Success'){echo"success";}
                         ; ?>">
                            <span class="icon text-white-50">
                            <?php if($o['status'] == 'Success') :?>
                            <i class="fas fa-check"></i>
                            <?php elseif ($o['status'] == 'Error') :?>
                            <i class="fas fa-exclamation-triangle"></i>
                            <?php elseif ($o['status'] == 'Pending') :?>
                            <i class="fas fa-info-circle"></i>
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
