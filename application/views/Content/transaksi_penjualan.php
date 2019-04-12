		<div class="right_col" role="main">

			<div class="page-title">
              <div class="title_left">
                <h3>Penjualan </h3>
              </div>
            </div>
            <div class="clearfix"></div>

            	<div class="panel panel-default">

            		<div class="panel-body">
					
						<div class='row'>

						 <div class='col-sm-3'>
						    <div class="panel panel-primary" style="border-color: #344154 ">
								<div class="panel-heading" style="background-color: #344154 "><i class='fa fa-file-text-o fa-fw'></i> Informasi Nota</div>
									<div class="panel-body">

										<div class="form-horizontal">
											<div class="form-group">
												<label class="col-sm-4 control-label">No. Nota</label>
												<div class="col-sm-8">
													<input type='text' name='nomor_nota' class='form-control input-sm' id='nomor_nota' value="">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label">Tanggal</label>
												<div class="col-sm-8">
													<input type='text' name='tanggal' class='form-control input-sm' id='tanggal' value="">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label">Kasir</label>
												<div class="col-sm-8">
													<select name='id_kasir' id='id_kasir' class='form-control input-sm'>
														
													</select>
												</div>
											</div>
										</div>
									</div>					
							</div>
							<div class="panel panel-primary" style="border-color: #344154 ">
								<div class="panel-heading" style="background-color: #344154 "><i class='fa fa-user'></i> Informasi Pelanggan</div>
								<div class="panel-body">
									<div class="form-group">
										<label>Pelanggan</label>
										<a href="" class='pull-right' id='TambahPelanggan'>Tambah Baru ?</a>
										<select name='id_pelanggan' id='id_pelanggan' class='form-control input-sm' style='cursor: pointer;'>
											<option value=''>-- Umum --</option>									
										</select>
									</div>
									<div class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-4 control-label">Telp / HP</label>
											<div class="col-sm-8">
												<div id='telp_pelanggan'><small><i>-</i></small></div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-4 control-label">Alamat</label>
											<div class="col-sm-8">
												<div id='alamat_pelanggan'><small><i>-</i></small></div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-4 control-label">Info Lain</label>
											<div class="col-sm-8">
												<div id='info_tambahan_pelanggan'><small><i>-</i></small></div>
											</div>
										</div>
									</div>

								</div>
							</div>
						 </div>
						 <div class='col-sm-4' style="margin-top: 8%;">

			                    <form class="form-horizontal form-label-left" action="" method="post">
			                    <div class="form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Barang</label>
			                        <div class="col-md-4 col-sm-6 col-xs-12">
			                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="id_supplier">
			                        </div>
			                      </div>
			                      <div class="form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Barang</label>
			                        <div class="col-md-4 col-sm-6 col-xs-12">
			                          <input type="text" id="last-name" class="form-control col-md-7 col-xs-12" name="nama_supplier">
			                        </div>
			                      </div>
			                      <div class="form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga</label>
			                        <div class="col-md-4 col-sm-6 col-xs-12">
			                        	<input type="text" id="last-name" class="form-control col-md-7 col-xs-12" name="keterangan_supplier">
			                        </div>
			                      </div>
			                      <div class="form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Qty</label>
			                        <div class="col-md-4 col-sm-6 col-xs-12">
			                          <input type="text" id="last-name" class="form-control col-md-7 col-xs-12" name="keterangan_supplier">
			                        </div>
			                      </div>

			                      <div class="ln_solid"></div>
			                      <div class="form-group">
			                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
			                          <button class="btn btn-primary" type="reset">Reset</button>
			                          <button type="submit" class="btn btn-success">Submit</button>
			                        </div>
			                      </div>


			                    </form>
			                  
						 </div>

						 <div class='col-sm-4' style="margin-top: 8%;">

			                    <form class="form-horizontal form-label-left" action="" method="post">
			                    <div class="form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Jasa</label>
			                        <div class="col-md-4 col-sm-6 col-xs-12">
			                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="id_supplier">
			                        </div>
			                      </div>
			                      <div class="form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Jasa</label>
			                        <div class="col-md-4 col-sm-6 col-xs-12">
			                          <input type="text" id="last-name" class="form-control col-md-7 col-xs-12" name="nama_supplier">
			                        </div>
			                      </div>
			                      <div class="form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga</label>
			                        <div class="col-md-4 col-sm-6 col-xs-12">
			                        	<input type="text" id="last-name" class="form-control col-md-7 col-xs-12" name="keterangan_supplier">
			                        </div>
			                      </div>
			                      <div class="form-group">
			                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Teknisi Bengkel</label>
			                        <div class="col-md-4 col-sm-6 col-xs-12">
			                          <input type="text" id="last-name" class="form-control col-md-7 col-xs-12" name="keterangan_supplier">
			                        </div>
			                      </div>

			                      <div class="ln_solid"></div>
			                      <div class="form-group">
			                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
			                          <button class="btn btn-primary" type="reset">Reset</button>
			                          <button type="submit" class="btn btn-success">Submit</button>
			                        </div>
			                      </div>


			                    </form>
			                  
						 </div>
						 <div class='col-sm-12'>
						 	<table class='table table-bordered' id='TabelTransaksi'>
								<thead>
									<tr>
										<th style='width:35px;'>#</th>
										<th style='width:210px;'>Kode Barang</th>
										<th>Nama Barang</th>
										<th style='width:120px;'>Harga</th>
										<th style='width:75px;'>Qty</th>
										<th style='width:125px;'>Sub Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th style='width:35px;'>1</th>
										<th style='width:210px;'></th>
										<th></th>
										<th style='width:120px;'></th>
										<th style='width:75px;'></th>
										<th style='width:125px;'></th>
									</tr>

									<tr>
										<th style='width:35px;'>2</th>
										<th style='width:210px;'></th>
										<th></th>
										<th style='width:120px;'></th>
										<th style='width:75px;'></th>
										<th style='width:125px;'></th>
									</tr>

									<tr>
										<th style='width:35px;'>3</th>
										<th style='width:210px;'></th>
										<th></th>
										<th style='width:120px;'></th>
										<th style='width:75px;'></th>
										<th style='width:125px;'></th>
									</tr>

									
								</tbody>
							</table>

							<table class='table table-bordered' id='TabelTransaksi'>
								<thead>
									<tr>
										<th style='width:35px;'>#</th>
										<th style='width:210px;'>Kode Jasa</th>
										<th>Nama Jasa</th>
										<th style='width:155px;'>Harga</th>
										<th style='width:165px;'>Teknisi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th style='width:35px;'>1</th>
										<th style='width:210px;'></th>
										<th></th>
										<th style='width:155;'></th>
										<th style='width:165px;'></th>
									</tr>

									<tr>
										<th style='width:35px;'>2</th>
										<th style='width:210px;'></th>
										<th></th>
										<th style='width:155px;'></th>
										<th style='width:165px;'></th>
									</tr>

									
								</tbody>
							</table>

							<div class='alert alert-info text-right' style="background-color: #344154 ">
								<h2>Total : <span id='TotalBayar'>Rp. 0</span></h2>
								<input type="hidden" id='TotalBayarHidden'>
							</div>

							<div class='col-sm-7'>
								
							</div>	
							<div class='col-sm-5'>
								<div class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-6 control-label">Bayar (F8)</label>
										<div class="col-sm-6">
											<input type='text' name='cash' id='UangCash' class='form-control' onkeypress='return check_int(event)'>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-6 control-label">Kembali</label>
										<div class="col-sm-6">
											<input type='text' id='UangKembali' class='form-control' disabled>
										</div>
									</div>
									<div class='row'>
										<div class='col-sm-6' style='padding-right: 0px;'>
											<button type='button' class='btn btn-warning btn-block' id='CetakStruk'>
												<i class='fa fa-print'></i> Cetak SPK
											</button>
										</div>
										<div class='col-sm-6'>
											<button type='button' class='btn btn-primary btn-block' id='Simpann'>
												<i class='fa fa-floppy-o'></i> Simpan
											</button>
										</div>
									</div>
								</div>
							</div>
						 </div>

						</div>

					</div>

				</div>

		</div>

<script>
$(document).ready(function(){

	for(B=1; B<=1; B++){
		BarisBaru();
	}

	$('#id_pelanggan').change(function(){
		if($(this).val() !== '')
		{
			$.ajax({
				url: "<?php echo site_url('penjualan/ajax-pelanggan'); ?>",
				type: "POST",
				cache: false,
				data: "id_pelanggan="+$(this).val(),
				dataType:'json',
				success: function(json){
					$('#telp_pelanggan').html(json.telp);
					$('#alamat_pelanggan').html(json.alamat);
					$('#info_tambahan_pelanggan').html(json.info_tambahan);
				}
			});
		}
		else
		{
			$('#telp_pelanggan').html('<small><i>Tidak ada</i></small>');
			$('#alamat_pelanggan').html('<small><i>Tidak ada</i></small>');
			$('#info_tambahan_pelanggan').html('<small><i>Tidak ada</i></small>');
		}
	});

	$('#BarisBaru').click(function(){
		BarisBaru();
	});

	$("#TabelTransaksi tbody").find('input[type=text],textarea,select').filter(':visible:first').focus();
});

</script>