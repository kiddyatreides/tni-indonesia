<div class="panel-body1">
	  <h3>Data Distribusi</h3>
		<table class="table table-bordered data">
						<thead>
							<tr>
							  <th>No. </th>
							  <th>Kodam</th>
							  <th>Nama Barang</th>
							  <th>Jumlah</th>
							  <th>Tanggal & Waktu</th>
							  <th>Status</th>
							</tr>
						  </thead>
						  <tbody>
						  <?php $no = 1; foreach ($data->result() as $datas)
						   { ?>
							<tr>
							  <th scope="row"><?php echo $no?></th>
							  <td><a href="<?php echo base_url()?>admin/kodamdetail/<?php echo $datas->id_kodam?>"><?php echo $datas->nama?></a></td>
							  <td><?php echo $datas->id_fungsi?></td>
							  <td><?php echo $datas->qty?></td>
							  <td><?php echo format_hari_tanggal1($datas->datetime)?></td>
							  <td>
								  <?php if($datas->status == 1) { ?>
								  	<span class="label label-danger">Pending</span>
								  <?php } ?>
								  <?php if($datas->status == 2) { ?>
								  	<span class="label label-warning">Dalam Perjalanan</span>
								  <?php } ?>
								  <?php if($datas->status == 3) { ?>
								  	<span class="label label-success">Sukses</span>
								  <?php } ?>	
							  </td>
							</tr>
							<?php $no++; } ?>
						  </tbody>
						</table>
	</div>