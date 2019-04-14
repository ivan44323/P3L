<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Input Data Supplier </h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <form class="form-horizontal form-label-left" action="<?php echo base_url('Supplier/insert');?>" method="post">
              
              <!--<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Supplier</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="id_supplier" class="form-control col-md-7 col-xs-12" name="id_supplier">
                </div>
              </div>-->

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Supplier</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="nama_supplier" class="form-control col-md-7 col-xs-12" name="nama_supplier">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Supplier</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <textarea id="alamat_supplier" class="form-control" name="alamat_supplier"></textarea>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Telp Supplier</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="telp" class="form-control col-md-7 col-xs-12" name="telp">
                </div>
              </div>

              <div class="ln_solid"></div>  

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Sales</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="nama_sales" class="form-control col-md-7 col-xs-12" name="nama_sales">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Telp Sales</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="telepon_sales" class="form-control col-md-7 col-xs-12" name="telepon_sales">
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
            <!-- <form  action="<?php echo site_url('Supplier/search_supplier');?>" method="post">
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
                  <th scope="col">ID SUPPLIER</th>
                  <th scope="col">NAMA SUPPLIER</th>
                  <th scope="col">ALAMAT SUPPLIER</th>
                  <th scope="col">TELP SUPPLIER</th>
                  <th scope="col">NAMA SALES</th>
                  <th scope="col">TELP SALES</th>
                  <th scope="col">ACTION</th>
								</tr>
							</thead>
              <tbody>
                <?php foreach ($supplier as $supplier):{$temp++;} ?>
                  <tr>
                    <td>
                      <?php echo $temp ?>
                    </td>
                    <td>
                      <?php echo $supplier->id_supplier ?>
                    </td>
                    <td>
                      <?php echo $supplier->nama_supplier ?>
                    </td>
                    <td>
                      <?php echo $supplier->alamat_supplier ?>
                    </td>
                    <td>
                      <?php echo $supplier->telp ?>
                    </td>
                    <td>
                      <?php echo $supplier->nama_sales ?>
                    </td>
                    <td>
                      <?php echo $supplier->telepon_sales ?>
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('Supplier/edit/'. $supplier->id_supplier) ?>"
                      class="btn btn-dark btn-sm"><i class="fa fa-edit"></i> Edit</a>
                      <a href="<?php echo site_url('Supplier/delete/'. $supplier->is_supplier) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
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
            
        
                      





        
        
        
        
         
        