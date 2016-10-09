<div class="grid_3 grid_4">
            <h3>Detail Kodam</h3>
    <div class="bs-example">
    <!--content-->
    <div class="panel-body1">
    <?php foreach ($kodam->result() as $kodams) { ?>
    		<center><h1 class="email-title"><?php echo $kodams->nama ?></h1></center>
    		
    	<br>
		<center><img src="<?php echo base_url()?>uploads/kodam/<?php echo $kodams->logo?>" width="150px" height="150px"> </center>
		<div class="clearfix"></div>
		<br>

		<ul class="collection">
		
								<li class="collection-item avatar email-unread">
								  <i class="fa fa-users icon_1"></i>
								  <div class="avatar_left">
									<span class="email-title">Kepala Satuan</span>
									<p class="truncate grey-text ultra-small"><?php echo $kodams->nama_pemimpin?></p>
								  </div>
								  <div class="clearfix"> </div>
								</li>
								<li class="collection-item avatar email-unread">
								  <i class="fa fa-tag icon_3"></i>
								  <div class="avatar_left">
								  <span class="email-title">Alamat</span>
									<p class="truncate grey-text ultra-small"><?php echo $kodams->alamat?></p>
								  </div>
								  <div class="clearfix"> </div>
								</li>
								<li class="collection-item avatar email-unread">
								  <i class="fa fa-tag icon_3"></i>
								  <div class="avatar_left">
									<span class="email-title">Kota</span>
									<p class="truncate grey-text ultra-small"><?php echo $kodams->kota?></p>
								  </div>
								  <div class="clearfix"> </div>
								</li>
								<li class="collection-item avatar email-unread">
								  <i class="fa fa-tag icon_3"></i>
								  <div class="avatar_left">
									<span class="email-title">Jumlah Personel</span>
									<p class="truncate grey-text ultra-small">1200</p>
								  </div>
								  <div class="clearfix"> </div>
								</li>
								<li class="collection-item avatar email-unread">
								  <i class="fa fa-tag icon_3"></i>
								  <div class="avatar_left">
									<span class="email-title">Total Pengiriman</span>
									<p class="truncate grey-text ultra-small">3</p>
								  </div>
								  <div class="clearfix"> </div>
								</li>
								<li class="collection-item avatar email-unread">
								  <i class="fa fa-tag icon_3"></i>
								  <div class="avatar_left">
									<span class="email-title">Total Permintaan</span>
									<p class="truncate grey-text ultra-small">3</p>
								  </div>
								  <div class="clearfix"> </div>
								</li>
			<?php } ?>
							</ul>
						


	</div>
	
	<div class="panel-body1">
	  <h3>Daftar Permintaan</h3>
		<table class="table table-bordered data">
						 <thead>
							<tr>
							  <th>No. </th>
							  <th>Nama Barang</th>
							  <th>Jumlah</th>
							  <th>Tanggal & waktu</th>
							  <th>Aksi</th>
							</tr>
						  </thead>
						  
						  <tbody>
						  <?php $no = 1; foreach ($laporankodam->result() as $lapors)
						   { ?>

							<tr>
							  <th scope="row"><?php echo $no?></th>
							  <td><?php echo $lapors->id_fungsi?></td>
							  <td><?php echo $lapors->qty?></td>
							  <td><?php echo format_hari_tanggal1($lapors->datetime)?></td>
							  <td><i class="lnr lnr-power-switch"><a href="#"> Kirim Barang</a></i></td>
							</tr>
							<?php $no++; } ?>
						  </tbody>
						</table>
	</div>
	<div class="panel-body1">
	  <h3>Laporan Distribusi</h3>
		<table class="table table-bordered data">
						<thead>
							<tr>
							  <th>No. </th>
							  <th>Nama Barang</th>
							  <th>Jumlah</th>
							  <th>Tanggal & Waktu</th>
							  <th>Status</th>
							</tr>
						  </thead>
						  <tbody>
						  <?php $no = 1; foreach ($laporankodam2->result() as $lapors2)
						   { ?>
							<tr>
							  <th scope="row"><?php echo $no?></th>
							  <td><?php echo $lapors2->id_fungsi?></td>
							  <td><?php echo $lapors2->qty?></td>
							  <td><?php echo format_hari_tanggal1($lapors->datetime)?></td>
							  <td>
								  <?php if($lapors2->status == 1) { ?>
								  	<span class="label label-danger">Pending</span>
								  <?php } ?>
								  <?php if($lapors2->status == 2) { ?>
								  	<span class="label label-warning">Dalam Perjalanan</span>
								  <?php } ?>
								  <?php if($lapors2->status == 3) { ?>
								  	<span class="label label-success">Sukses</span>
								  <?php } ?>	
							  </td>
							</tr>
							<?php $no++; } ?>
						  </tbody>
						</table>
	</div>
    <!--content-->


    </div>
</div>

