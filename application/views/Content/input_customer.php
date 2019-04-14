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
            <form class="form-horizontal form-label-left" action="<?php echo site_url('Customer/insert');?>" method="post">
              <!--<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Customer</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="id_customer" class="form-control col-md-7 col-xs-12" name="id_customer">
                </div>
              </div>-->

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Customer</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="nama_customer" class="form-control col-md-7 col-xs-12" name="nama_customer">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Customer</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <textarea id="alamat_customer" class="form-control" name="alamat_customer"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Telepon Customer</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="telepon_customer" class="form-control col-md-7 col-xs-12" name="telepon_customer">
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
            <!-- <form  action="<?php echo site_url('Customer/search_customer');?>" method="post">
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
                  <th scope="col">ID CUSTOMER</th>
                  <th scope="col">NAMA CUSTOMER</th>
                  <th scope="col">ALAMAT CUSTOMER</th>
                  <th scope="col">TELEPON CUSTOMER</th>
                  <th scope="col">Action</th>
								</tr>
							</thead>
              <tbody>
                <?php foreach ($customer as $customer):{$temp++;} ?>
                  <tr>
                    <td>
                      <?php echo $temp ?>
                    </td>
                    <td>
                      <?php echo $customer->id_customer ?>
                    </td>
                    <td>
                      <?php echo $customer->nama_customer ?>
                    </td>
                    <td>
                      <?php echo $customer->telepon_customer ?>
                    </td>
                    <td>
                      <?php echo $customer->alamat_customer ?>
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('Customer/edit/'.$customer->id_customer) ?>"
                      class="btn btn-dark btn-sm"><i class="fa fa-edit"></i> Edit</a>
                      <a href="<?php echo site_url('Customer/delete/'.$customer->id_customer) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
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
            
        
                      