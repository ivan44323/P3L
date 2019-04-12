<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Input Data Costumer </h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <form class="form-horizontal form-label-left" action="<?php echo site_url('JasaService/edit');?>" method="post">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Jasa Service</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="id_jasa_service" class="form-control col-md-7 col-xs-12" name="ID_JASA_SERVICE" value="<?php echo $service_edit->ID_JASA_SERVICE ?>" readonly="readonly">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Jasa Service</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="nama_jasa" class="form-control col-md-7 col-xs-12" name="NAMA_JASA" value="<?php echo $service_edit->NAMA_JASA ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Jual Jasa Service</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="harga_jual_jasa" class="form-control col-md-7 col-xs-12" name="HARGA_JUAL_JASA" value="<?php echo $service_edit->HARGA_JUAL_JASA ?>">
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
            <!-- <form  action="<?php echo site_url('JasaService/search_jasa_service');?>" method="post">
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
                  <th scope="col">ID JASA SERVICE</th>
                  <th scope="col">NAMA JASA</th>
                  <th scope="col">HARGA JUAL JASA</th>
                  <th scope="col">ACTION</th>
								</tr>
							</thead>
              <tbody>
                <?php foreach ($jasa_service as $jasa_service):{$temp++;} ?>
                  <tr>
                    <td>
                      <?php echo $temp ?>
                    </td>
                    <td>
                      <?php echo $jasa_service->ID_JASA_SERVICE ?>
                    </td>
                    <td>
                      <?php echo $jasa_service->NAMA_JASA ?>
                    </td>
                    <td>
                      <?php echo $jasa_service->HARGA_JUAL_JASA ?>
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('JasaService/edit/'. $jasa_service->ID_JASA_SERVICE) ?>"
                      class="btn btn-dark btn-sm"><i class="fa fa-edit"></i> Edit</a>
                      <a href="<?php echo site_url('JasaService/delete/'. $jasa_service->ID_JASA_SERVICE) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
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
