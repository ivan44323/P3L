<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Transaksi</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <form class="form-horizontal form-label-left" action="<?php echo site_url('Transaksi/insert');?>" method="post">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Transaksi</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="id_transaksi" class="form-control col-md-7 col-xs-12" name="id_transaksi">
                </div>
              </div>

							<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Sparepart</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="qty_transaksi" class="form-control col-md-7 col-xs-12" name="qty_transaksi">
                </div>
              </div>

							<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Transaksi</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="total_transaksi" class="form-control col-md-7 col-xs-12" name="total_transaksi">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Sparepart</label>
                <div class="col-md-2 col-sm-9 col-xs-12">
                  <select class="form-control" name="id_sparepart">
                      <option></option>
                    <?php foreach($sparepart_nama as $sparepart_nama): ?>
                      <option value="<?php echo $sparepart_nama->id_sparepart; ?>"><?php echo $sparepart_nama->nama_sparepart; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

							<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Jasa Service</label>
                <div class="col-md-2 col-sm-9 col-xs-12">
                  <select class="form-control" name="id_jasa_service">
                      <option></option>
                    <?php foreach($jasaservice_nama as $jasaservice_nama): ?>
                      <option value="<?php echo $jasaservice_nama->id_jasa_service; ?>"><?php echo $jasaservice_nama->nama_jasa; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

							<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pegawai</label>
                <div class="col-md-2 col-sm-9 col-xs-12">
                  <select class="form-control" name="id_pegawai">
                      <option></option>
                    <?php foreach($pegawai_nama as $pegawai_nama): ?>
                      <option value="<?php echo $pegawai_nama->id_pegawai; ?>"><?php echo $pegawai_nama->nama_pegawai; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

							<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Detail Transaksi</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="id_detail_transaksi" class="form-control col-md-7 col-xs-12" name="id_detail_transaksi">
                </div>
              </div>

							<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Polisi</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
								<select class="form-control" name="no_polisi">
                      <option></option>
                    <?php foreach($polisi_no as $polisi_no): ?>
                      <option value="<?php echo $polisi_no->no_polisi; ?>"></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <!--<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Jasa Service</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="nama_sparepart" class="form-control col-md-7 col-xs-12" name="nama_sparepart">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Merk Sparepart</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="merk_sparepart" class="form-control col-md-7 col-xs-12" name="merk_sparepart">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Rak Sparepart</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="id_rak_sparepart" class="form-control col-md-7 col-xs-12" name="id_rak_sparepart">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Sparepart </label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="jumlah_sparepart" class="form-control col-md-7 col-xs-12" name="jumlah_sparepart">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Minimum Stok </label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="jumlah_min" class="form-control col-md-7 col-xs-12" name="jumlah_min">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Jual Sparepart</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="harga_jual_sparepart" class="form-control col-md-7 col-xs-12" name="harga_jual_sparepart">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Beli Sparepart</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="harga_beli_sparepart" class="form-control col-md-7 col-xs-12" name="harga_beli_sparepart">
                </div>
              </div>-->

              <div class="ln_solid"></div>  

              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

              <div class="ln_solid"></div> 
            <form>
          <div>
        </div>
      </div>
      
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <!-- <form  action="<?php echo site_url('Transaksi/search_transaksi');?>" method="post">
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="<?php echo $search_keyword?>" name="keyword">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Go</button>
                    </span>
                  </div>
                </div>
              </div>
            </form> -->

            <table class="table table-striped table-bordered" id="data">
              <thead>
							  <tr>
                  <th scope="col">NO</th>
                  <th scope="col">ID TRANSAKSI</th>
                  <th scope="col">JUMLAH TRANSAKSI</th>
                  <th scope="col">TOTAL TRANSAKSI</th>
                  <th scope="col">NAMA SPAREPART</th>
                  <th scope="col">NAMA JASA SERVICE</th>
                  <th scope="col">NAMA PEGAWAI</th>
                  <th scope="col">ID DETAIL TRANSAKSI</th>
                  <th scope="col">NOMOR POLISI</th>
                  <th scope="col">Action
									</th>
								</tr>
							</thead>
              <tbody>
                <?php foreach ($transaksi_jasa as $transaksi_jasa):{$temp++;} ?>
                  <tr>
                    <td>
                      <?php echo $temp ?>
                    </td>
                    <td>
                      <?php echo $transaksi_jasa->id_transaksi ?>
                    </td>
                    <td>
                      <?php echo $transaksi_jasa->qty_transaksi ?>
                    </td>
                    <td>
                      <?php echo $transaksi_jasa->total_transaksi ?>
                    </td>
                    <td>
                      <?php echo $transaksi_jasa->nama_sparepart ?>
                    </td>
                    <td>
                      <?php echo $transaksi_jasa->nama_jasa ?>
                    </td>
                    <td>
                      <?php echo $transaksi_jasa->nama_pegawai ?>
                    </td>
                    <td>
                      <?php echo $transaksi_jasa->id_detail_transaksi ?>
                    </td>
                    <td>
                      <?php echo $transaksi_jasa->no_polisi ?>
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('Transaksi/edit/'.$transaksi_jasa->id_transaksi) ?>"
                      class="btn btn-dark btn-sm"><i class="fa fa-edit"></i> Edit</a>
                      <a href="<?php echo site_url('Transaksi/delete/'.$transaksi_jasa->id_transaksi) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
                    </td> 
                  </tr>
                <?php endforeach; ?>    
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>  
  </div>
</div>
            
        
                      