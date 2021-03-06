<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>TNI Indonesia Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url()?>assets/backend/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url()?>assets/backend/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url()?>assets/backend/css/lines.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()?>assets/backend/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo base_url()?>assets/backend/js/jquery.min.js"></script>

<!--datatables-->
<script type="text/javascript" src="<?php echo base_url()?>assets/backend/DataTables/media/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/backend/DataTables/media/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/backend/DataTables/media/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/backend/DataTables/media/css/dataTables.bootstrap.css">

<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="<?php echo base_url()?>assets/backend/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url()?>assets/backend/js/metisMenu.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="<?php echo base_url()?>assets/backend/js/d3.v3.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/rickshaw.js"></script>


<!-- akhir dari Bagian js -->
<script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyBIE9_0cfpD3hMSL95jhdkJ3zsLbBOiFVs" type="text/javascript"></script>


          
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>">TNI Indonesia</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">2</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Messages</strong>
						</li>
						<?php foreach ($pesans->result() as $ps2) { ?>
						<li class="avatar">
							<a href="<?php echo base_url()?>admin/pesanmasuk">
								<img src="<?php echo base_url()?>uploads/kodam/<?php echo $ps2->logo?>" alt=""/>
								<div><?php echo substr($ps2->pesan, 0,20)?>[....]</div>
								<small><?php echo $ps2->datetime?></small>
								<span class="label label-info">Baru</span>
							</a>
						</li>
						<?php } ?>
						<li class="dropdown-menu-footer text-center">
							<a href="<?php echo base_url()?>admin/pesanmasuk">Lihat semua pesan</a>
						</li>	
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="<?php echo base_url()?>uploads/kodam/tniad.png"><span class="badge">6 </span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="<?php echo base_url()?>admin/mintalogistik"><i class="fa fa-bell-o"></i> Permintaan <span class="label label-info">2</span></a></li>
						<li class="m_2"><a href="<?php echo base_url()?>admin/pesanmasuk"><i class="fa fa-envelope-o"></i> Pesan <span class="label label-success">1</span></a></li>
						<li><a href="<?php echo base_url()?>admin/daftarfeedback"><i class="fa fa-comments"></i> Umpan Balik <span class="label label-warning">3</span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url()?>"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Logistik<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url()?>admin/mintalogistik">Minta Logistik</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>admin/permintaanlogistik">Lihat Permintaan Logistik</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>admin/datadistribusi">Data Logistik</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>Feedback<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<li>
                                    <a href="<?php echo base_url()?>admin/isifeedback">Tambah Feedback</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>admin/daftarfeedback">Lihat Feedback</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
       <!--dari sini keatas tempat menu, header, -->
        <div id="page-wrapper">
	        <div class="graphs">
	     		<div class="col_3">
				   		<div class="xs">
        				<?php echo $contents;?>
        				</div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
      </div>

      <!--dari sini ke atas tempat sidebar yang ilang-->
   
      <!-- /#page-wrapper -->
   </div>
   <script type="text/javascript">
		$(document).ready(function(){
			$('.data').DataTable();
		});
	</script>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/backend/js/bootstrap.min.js"></script>
</body>
</html>
