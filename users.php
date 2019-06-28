<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Credit Management</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	
	 <link rel="stylesheet" href="../credit/css/new.css">
	
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="css/ab.css" rel="stylesheet">
	<style>
.glyphicon {
    font-size: 15px;
    color:black;
}
.qwerty{
	color:black;
}

</style>

</head>
<?php include_once 'admin-lib.php';?>

<body>


		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#" style="font-size:25px;"><span >CREDIT&nbsp;</span>MANAGEMENT&nbsp;<span>SYSTEM</span></a>
				
			</div><!-- /.container-fluid -->

	</nav>
	   <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar" style="background-color:white">
	   <div class="divider"></div>
       <ul class="nav menu">
 <li ><a href="<?php echo $siteUrl;?>dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="active"><a href="<?php echo $siteUrl;?>users.php"><em class="fa fa-id-badge">&nbsp;</em> View All Users</a></li>
				</ul>
	</div><!--/.sidebar-->
	   
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			</div><!--/.row-->
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" style="font-size:30px; color:black"><b>All Users</b></h1>
			</div>
		</div><!--/.row--><!--/.row-->
		<div class="col-lg-2"></div>
		<div class="col-lg-12">
	<div class="tbl-header">
   
    <table cellpadding="0" cellspacing="0" border="0" >
      <thead style="background-color:silver">
        <tr>
         <th style="font-size:18px; color:black"><b>ID </b></th>
		  <th style="font-size:18px; color:black"><b>Name</b></th>
		  <th style="font-size:18px; color:black"><b>Email</b></th>
		  <th style="font-size:18px; color:black"><b>Current Credits</b></th>
		  <th style="font-size:18px; color:black"><b></b></th>
        </tr>
		</thead>
		</div>
      <tbody>
	  <?php 
        $tripList = $adminDao->allList();
        if ($tripList) {
			$count=1;
		foreach ($tripList as $trip){ ?>
		<tr>
	   <td style="font-size:15px"><?php echo $trip->id;?></td>
	  <td style="font-size:15px"><?php echo $trip->name;?></td>
	  <td style="font-size:15px"><?php echo $trip->email;?></td>
	  <td style="font-size:15px">&emsp;&emsp;&emsp;<?php echo $trip->ccredits;?></td>
	  
	  <td style="font-size:15px">
	 <a href="<?php echo $siteUrl;?>view-<?php echo $trip->id;?>" class="abc"><em><b>&emsp;&emsp;View User</b></em></a>
	  </td>
	  
</tr>
	<?php $count++;}}else{echo "<tr><td colspan='9'>No details..</td></tr>";}?>
	  </tbody>
    </table >
  


</section>
<?php include_once 'files.php';?>

    <script  src="js/index.js"></script>
	</html>
	

