<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Input Data Kendaraan </h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <form class="form-horizontal form-label-left" action="<?php echo site_url('KendaraanCustomer/insert');?>" method="post">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">No Polisi</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="no_polisi" class="form-control col-md-7 col-xs-12" name="no_polisi">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer</label>
                <div class="col-md-2 col-sm-9 col-xs-12">
                  <select class="form-control" name="id_customer">
                      <option></option>
                    <?php foreach($kendaraancustomer_customer as $kendaraancustomer_customer): ?>
                      <option value="<?php echo $kendaraancustomer_customer->id_customer; ?>"><?php echo $kendaraancustomer_customer->nama_customer; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Type Motor</label>
                <div class="col-md-2 col-sm-9 col-xs-12">
                  <select class="form-control" name="id_type">
                      <option></option>
                    <?php foreach($kendaraancustomer_type_motor as $kendaraancustomer_type_motor): ?>
                      <option value="<?php echo $kendaraancustomer_type_motor->id_type; ?>"><?php echo $kendaraancustomer_type_motor->nama_type; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Type Motor</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="autocompleteMotor" class="form-control col-md-7 col-xs-12" name="no_polisi">
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
            <!-- <form  action="<?php echo site_url('KendaraanCustomer/search_kendaraan_customer');?>" method="post">
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
                  <th scope="col">NO POLISI</th>
                  <th scope="col">ID CUSTOMER</th>
                  <th scope="col">NAMA CUSTOMER</th>
                  <th scope="col">ID TYPE</th>
                  <th scope="col">TYPE</th>
                  <th scope="col">ACTION</th>
								</tr>
							</thead>
              <tbody>
                <?php foreach ($kendaraancustomer as $kendaraancustomer):{$temp++;} ?>
                  <tr>
                    <td>
                      <?php echo $temp ?>
                    </td>
                    <td>
                      <?php echo $kendaraancustomer->no_polisi ?>
                    </td>
                    <td>
                      <?php echo $kendaraancustomer->id_customer ?>
                    </td>
                    <td>
                      <?php echo $kendaraancustomer->nama_customer ?>
                    </td>
                    <td>
                      <?php echo $kendaraancustomer->id_type ?>
                    </td>
                    <td>
                      <?php echo $kendaraancustomer->nama_type ?>
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('KendaraanCustomer/edit/'.$kendaraancustomer->no_polisi) ?>"
                      class="btn btn-dark btn-sm"><i class="fa fa-edit"></i> Edit</a>
                      <a href="<?php echo site_url('KendaraanCustomer/delete/'.$kendaraancustomer->no_polisi) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
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
            
        
                      