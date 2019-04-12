<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Edit Data Sparepart</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <form class="form-horizontal form-label-left" action="<?php echo site_url('Sparepart/edit');?>" method="post">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Sparepart</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="id_sparepart" class="form-control col-md-7 col-xs-12" name="id_sparepart" value="<?php echo $sparepart_edit->id_sparepart ?>" readonly="readonly">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Type Sparepart</label>
                <div class="col-md-2 col-sm-9 col-xs-12">
                  <select class="form-control" name="id_type_sparepart">
                      <option></option>
                    <?php foreach($sparepart_type as $sparepart_type): ?>
                      <option value="<?php echo $sparepart_type->id_type_sparepart; ?>" <?php if($sparepart_type->id_type_sparepart==$sparepart_edit->id_type_sparepart) { ?> selected="selected" <?php } ?>><?php echo $sparepart_type->nama_type_sparepar; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <!-- <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Type Sparepart</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="id_type_sparepart" class="form-control col-md-7 col-xs-12" name="id_type_sparepart">
                </div>
              </div> -->

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Sparepart</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="nama_sparepart" class="form-control col-md-7 col-xs-12" name="nama_sparepart" value="<?php echo $sparepart_edit->nama_sparepart ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Merk Sparepart</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="merk_sparepart" class="form-control col-md-7 col-xs-12" name="merk_sparepart" value="<?php echo $sparepart_edit->merk_sparepart ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Rak Sparepart</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="id_rak_sparepart" class="form-control col-md-7 col-xs-12" name="id_rak_sparepart" value="<?php echo $sparepart_edit->id_rak_sparepart ?>">
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
                  <input type="text" id="merk_sparepart" class="form-control col-md-7 col-xs-12" name="jumlah_min" value="<?php echo $sparepart_edit->jumlah_min ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Jual Sparepart</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="harga_jual_sparepart" class="form-control col-md-7 col-xs-12" name="harga_jual_sparepart" value="<?php echo $sparepart_edit->harga_jual_sparepart ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Beli Sparepart</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="harga_beli_sparepart" class="form-control col-md-7 col-xs-12" name="harga_beli_sparepart" value="<?php echo $sparepart_edit->harga_beli_sparepart ?>">
                </div>
              </div>

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
            <!-- <form  action="<?php echo site_url('Sparepart/search_sparepart');?>" method="post">
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
                  <th scope="col">ID SPAREPART</th>
                  <th scope="col">TYPE SPAREPART</th>
                  <th scope="col">NAMA SPAREPART</th>
                  <th scope="col">MERK SPAREPART</th>
                  <th scope="col">ID RAK SPAREPART</th>
                  <th scope="col">JUMLAH SPAREPART</th>
                  <th scope="col">JUMLAH MIN STOK</th>
                  <th scope="col">HARGA JUAL SPAREPART</th>
                  <th scope="col">HARGA BELI SPAREPART</th>
                  <th scope="col">Action</th>
								</tr>
							</thead>
              <tbody>
                <?php foreach ($sparepart as $sparepart):{$temp++;} ?>
                  <tr>
                    <td>
                      <?php echo $temp ?>
                    </td>
                    <td>
                      <?php echo $sparepart->id_sparepart ?>
                    </td>
                    <td>
                      <?php echo $sparepart->nama_type_sparepar ?>
                    </td>
                    <td>
                      <?php echo $sparepart->nama_sparepart ?>
                    </td>
                    <td>
                      <?php echo $sparepart->merk_sparepart ?>
                    </td>
                    <td>
                      <?php echo $sparepart->id_rak_sparepart ?>
                    </td>
                    <td>
                      <?php echo $sparepart->jumlah_sparepart ?>
                    </td>
                    <td>
                      <?php echo $sparepart->jumlah_min ?>
                    </td>
                    <td>
                      <?php echo $sparepart->harga_jual_sparepart ?>
                    </td>
                    <td>
                      <?php echo $sparepart->harga_beli_sparepart ?>
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('Sparepart/edit/'.$sparepart->id_sparepart) ?>"
                      class="btn btn-dark btn-sm"><i class="fa fa-edit"></i> Edit</a>
                      <a href="<?php echo site_url('Sparepart/delete/'.$sparepart->id_sparepart) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
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
            
        
                      