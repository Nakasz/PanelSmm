        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <span class="mb-0 text-gray-800">Home > <?= $title; ?></span>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sticky-note fa-sm text-white-50"></i> Log penggunaan saldo</a>
          </div>
          <div class="row">
                <div class="col-lg-7">
                <!-- Collapsable Card Example -->
                 <div class="card shadow">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Selamat Belanja</h6>
                    </div>
                    <div class="card-body">
                        <form class="user" action="<?= base_url('panel/order'); ?>" method="post">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Kategori</label>
                            <select class="form-control" id="category">
                            <option value="0">pilih kategori</option>
                            <?php if ($category == 1) {
                            	print('<option value="'.$category['id'].'">'.$category['name'].'</option>');
                            } else {
                            foreach ($category as $key) {
                            	print('<option value="'.$key['id'].'">'.$key['name'].'</option>');
                            }} ;?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Layanan</label>
                            <select class="form-control" id="service">
                            <option value="0">pilih layanan</option>
                            </select>
                          </div>
                          <div class="form-group">
                    		<label>Deskripsi</label>
                       		<div class="form-control" id="description" style="height: auto !important;">Deskripsi layanan.</div>
                          </div>
                          <div class="form-row">
                        	<div class="form-group col-md-4">
                            	<label>Harga/K</label>
                            	<div class="input-group">
                            	<div class="input-group-prepend">
                        		<span class="input-group-text">Rp</span>
                            	</div>
                        		<span class="form-control" id="price"></span>
                        	</div>
                        	</div>
                    		<div class="form-group col-md-4">
                    	    	<label>Min. Pesan</label>
                    	    	<span class="form-control" id="min">0</span>
                    		</div>
                        	<div class="form-group col-md-4">
                		    	<label>Maks. Pesan</label>
                		    	<span class="form-control" id="max">0</span>
                        	</div>
                          </div>
                          <div class="form-group">
                    		<label>Data</label>
                    		<input type="text" class="form-control form-control-user" name="data" placeholder="Link/username">
                        	</div>
                    	  <div class="form-group">
                    		<label>Jumlah Pesan</label>
                    		<input type="number" class="form-control" name="quantity" placeholder="1000" id="quantity">
                       	  </div>
                        	<input type="hidden" id="rate">
                    	  <div class="form-group">
                    		<label>Total Harga</label>
                    		<input type="text" class="form-control form-control-user" id="total-price" readonly><small class="text-danger">Inputkan jumlah pesan</small>
                    	  </div>
            			  <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> Submit</button>
                        </form>
                    </div>
                   </div>
                 </div>
               <div class="col-lg-5">
                  <!-- Basic Card Example -->
                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Harap Di Baca</h6>
                    </div>
                    <div class="card-body">
                        <b>CARA MELAKUKAN ORDER :</b><br/>
                        <ul>
                            <li>1. Pilih Kategori Sosmed dan Layanan yang akan di order.</li>
                            <li>2. Masukkan Username / Link Url :</li>
                             <li>- Jika order Followers, cukup masukkan username Instagramnya saja. Contoh : technobooks.id</li>
                             <li>- Jika order Likes atau Views, masukkan link url foto/video. Contoh : https://www.instagram.com/p/BdW_Kobn7nR/</li>
                            <li>3. Masukkan jumlah yang akan di order, harga akan otomatis menghitung.</li>
                            <li>4. Jika sudah, klik tombol SUBMIT, Selesai. System akan memproses secara otomatis, ditunggu saja maksimal 1x24 jam.</li>
                        </ul>
                        <b>ATURAN :</b>
                        <ul>
                        <li>- Akun Sosial Media Anda Jangan Di Private.</li>
                        <li>- Jangan submit order bersamaan ke akun yang sama jika order yang sebelumnya statusnya masih In Progress.</li>
                        <li>- Jika salah input, bukan tanggung jawab kami. Terimakasih.</li>                        
                        </ul>
                    </div>
                  </div>
                </div>
               </div>
        </div>
        
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->    