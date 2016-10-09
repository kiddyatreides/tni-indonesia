
		   	 <h1> Daftar Feedback</h1>
		   	 	<div class="online">
		   	 	<?php foreach ($feedback->result() as $fbs) {  ?>
					<a href="#"><div class="online-top">
						<div class="top-at">
							<img class="img-responsive" src="<?php echo base_url()?>uploads/kodam/<?php echo $fbs->logo?>" style="width: 150px; height: 150px;" alt="">
						</div>
						<div class="top-on">
							<div class="top-on1">
								<p><?php echo $fbs->nama?></p>
								<span><?php echo $fbs->judul?></span>
								<span><?php echo $fbs->isi?></span>
								<br>
								<br>
								<font><?php echo format_hari_tanggal1($fbs->datetime)?></font>
							</div>
							<div class="clearfix"> </div>
							<br> <?php if($fbs->status == 1) { ?>
								  	<span class="label label-danger">Buruk</span>
								  <?php } ?>
								  <?php if($fbs->status == 2) { ?>
								  	<span class="label label-success">Baik</span>
								  <?php } ?>
								  
						</div>
						<div class="clearfix"> </div>
					</div></a>
					<?php } ?>
				</div>
		   	 