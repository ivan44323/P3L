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
            <form class="form-horizontal form-label-left" action="<?php echo base_url('Supplier/edit');?>" method="post">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Supplier</label>
                <div class="col-md-2 col-sm-6 col-xs-12">
                  <input type="text" id="id_supplier" class="form-control col-md-7 col-xs-12" name="ID_SUPPLIER" value="<?php echo $supplier_edit->ID_SUPPLIER ?>" readonly="readonly">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Supplier</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="nama_supplier" class="form-control col-md-7 col-xs-12" name="NAMA_SUPPLIER" value="<?php echo $supplier_edit->NAMA_SUPPLIER ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Supplier</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <textarea id="alamat_supplier" class="form-control" name="ALAMAT_SUPPLIER"><?php echo $supplier_edit->ALAMAT_SUPPLIER ?></textarea>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Telp Supplier</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="telp" class="form-control col-md-7 col-xs-12" name="TELP" value="<?php echo $supplier_edit->TELP ?>">
                </div>
              </div>

              <div class="ln_solid"></div>  

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Sales</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="nama_sales" class="form-control col-md-7 col-xs-12" name="NAMA_SALES" value="<?php echo $supplier_edit->NAMA_SALES ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Telp Sales</label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <input type="text" id="telepon_sales" class="form-control col-md-7 col-xs-12" name="TELEPON_SALES" value="<?php echo $supplier_edit->TELEPON_SALES ?>">
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
                      <?php echo $supplier->ID_SUPPLIER ?>
                    </td>
                    <td>
                      <?php echo $supplier->NAMA_SUPPLIER ?>
                    </td>
                    <td>
                      <?php echo $supplier->ALAMAT_SUPPLIER ?>
                    </td>
                    <td>
                      <?php echo $supplier->TELP ?>
                    </td>
                    <td>
                      <?php echo $supplier->NAMA_SALES ?>
                    </td>
                    <td>
                      <?php echo $supplier->TELEPON_SALES ?>
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('Supplier/edit/'. $supplier->ID_SUPPLIER) ?>"
                      class="btn btn-dark btn-sm"><i class="fa fa-edit"></i> Edit</a>
                      <a href="<?php echo site_url('Supplier/delete/'. $supplier->ID_SUPPLIER) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a>
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
            
        
                      





        
        
        
        
         
        