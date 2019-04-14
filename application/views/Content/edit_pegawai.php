<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Edit Data Pegawai </h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
          <form class="form-horizontal form-label-left" action="<?php echo site_url('Pegawai/edit');?>" method="post">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Pegawai</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="id_pegawai" class="form-control col-md-7 col-xs-12" name="id_pegawai" value="<?php echo $pegawai_edit->id_pegawai ?>" readonly="readonly">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
                <div class="col-md-2 col-sm-9 col-xs-12">
                  <select class="form-control" name="id_role">
                      <option></option>
                    <?php foreach($pegawai_role as $pegawai_role): ?>
                      <option value="<?php echo $pegawai_role->id_role; ?>" <?php if($pegawai_role->id_role==$pegawai_edit->id_role) { ?> selected="selected" <?php } ?>><?php echo $pegawai_role->nama_role; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <!-- <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="id_role" class="form-control col-md-7 col-xs-12" name="id_role" value="<?php echo $pegawai_edit->id_role ?>">
                </div>
              </div> -->

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pegawai</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="id_role" class="form-control col-md-7 col-xs-12" name="nama_pegawai" value="<?php echo $pegawai_edit->nama_pegawai ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Pegawai</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <textarea id="alamat_pegawai" class="form-control" name="alamat_pegawai"><?php echo $pegawai_edit->alamat_pegawai ?></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Telepon Pegawai</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="telepon_pegawai" class="form-control col-md-7 col-xs-12" name="telepon_pegawai" value="<?php echo $pegawai_edit->telepon_pegawai ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Tgl Lahir Pegawai</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="tgl_lahir_pegawai" class="form-control col-md-7 col-xs-12" name="tgl_lahir_pegawai" value="<?php echo $pegawai_edit->tgl_lahir_pegawai ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gaji Pegawai</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="Gaji" class="form-control col-md-7 col-xs-12" name="gaji_pegawai" value="<?php echo $pegawai_edit->gaji_pegawai ?>">
                </div>
              </div>

              <div class="ln_solid"></div> 

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="username" class="form-control col-md-7 col-xs-12" name="username" value="<?php echo $pegawai_edit->username ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="password" class="form-control col-md-7 col-xs-12" name="password" value="<?php echo $pegawai_edit->password ?>">
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
            <!-- <form  action="<?php echo site_url('Pegawai/search_pegawai');?>" method="post">
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
                  <th scope="col">ID PEGAWAI</th>
                  <th scope="col">ROLE</th>
                  <th scope="col">NAMA PEGAWAI</th>
                  <th scope="col">ALAMAT PEGAWAI</th>
                  <th scope="col">TELEPON</th>
                  <th scope="col">TGL LAHIR</th>
                  <th scope="col">GAJI</th>
                  <th scope="col">USERNAME</th>
                  <th scope="col">PASSWORD</th>
                  <th scope="col">Action</th>
								</tr>
							</thead>
              <tbody>
                <?php foreach ($pegawai as $pegawai):{$temp++;} ?>
                  <tr>
                    <td>
                      <?php echo $temp ?>
                    </td>
                    <td>
                      <?php echo $pegawai->id_pegawai ?>
                    </td>
                    <td>
                      <?php echo $pegawai->nama_role ?>
                    </td>
                    <td>
                      <?php echo $pegawai->nama_pegawai ?>
                    </td>
                    <td>
                      <?php echo $pegawai->alamat_pegawai ?>
                    </td>
                    <td>
                      <?php echo $pegawai->telepon_pegawai ?>
                    </td>
                    <td>
                      <?php echo $pegawai->tgl_lahir_pegawai ?>
                    </td>
                    <td>
                      <?php echo $pegawai->gaji_pegawai ?>
                    </td>
                    <td>
                      <?php echo $pegawai->username ?>
                    </td>
                    <td>
                      <?php echo $pegawai->password ?>
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('Pegawai/edit/'.$pegawai->id_pegawai) ?>"
                      class="btn btn-dark btn-sm"><i class="fa fa-edit"></i> Edit</a>
                      <a href="<?php echo site_url('Pegawai/delete/'.$pegawai->id_pegawai) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
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
            
 