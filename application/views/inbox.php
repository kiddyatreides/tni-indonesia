		    <div class="activity_box">
		        <div class="scrollbar" id="style-2">
		        
                   <div class="activity-row">
                   <?php foreach ($pesan->result() as $pesans) { ?>
	                 <div class="col-xs-3 activity-img"><img src='<?php echo base_url()?>uploads/kodam/<?php echo $pesans->logo?>' class="img-responsive" alt="" style="width: 90px; height: 90px;"/></div>
	                 <div class="col-xs-8 activity-desc">
	                 	<h5><?php echo $pesans->nama?></h5>
	                    <p><a href="#"><?php echo $pesans->pesan?></a></p>
	                    <br>
	                    <font size="2px"><?php echo format_hari_tanggal($pesans->datetime)?></font>
	                 </div>
	                 <div class="clearfix"> </div>
                    </div>
                    <?php } ?>
	  			    
	  		        </div>
		          </div>
		    