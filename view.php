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
		
		<?php 
        $aboutDataList[]= $adminDao->allAboutById($_REQUEST['id']);
		
        if ($aboutDataList) {
			$count=1;
			foreach ($aboutDataList as $trip){ 
		       
		?>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" style="font-size:30px; color:black"><b>User Details</b></h1>
			</div>
		</div><!--/.row--><!--/.row-->
		<div class="col-lg-2"></div>
		<div class="col-lg-12">
	<div>
   <form id="frm" method="post" enctype="multipart/form-data" action="<?php echo $siteUrl;?>transfer-<?php echo $trip->id;?>">
    <table style="margin-left:100px;">		 
	
<tbody>

<tr>
	<td class="text-left" class="hi" style=" font-size:16px;color:black; align:center"><b>ID</td>
	<td class="text-left" class="hi" style="color:black;font-size:15px; align:center"><?php echo $trip->id;?></td>
</tr>

<tr>
	<td style="color:black;font-size:16px; align:right"><b>Name</td>
	<td  style="color:black;font-size:15px; align:left"><?php echo $trip->name;?></td>
</tr>

<tr>
	<td style="color:black;font-size:16px; align:center"><b>Email ID</td>
	<td  style="color:black;font-size:15px; align:center"><?php echo $trip->email;?></td>	
</tr>

<tr>
	<td style="color:black;font-size:16px; align:center"><b>Current Credits</td>
	<td style="color:black;font-size:15px; align:center"><?php echo $trip->ccredits;?></td>
</tr>	

<tr>
<td></td>
</tr>

<tr>
	<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	<input type="submit" style="font-size:15px;" value="Transfer Credits"></input></td>
</tr>

<?php $count++;}}else{echo "<tr><td colspan='9'>No details..</td></tr>";}?>
</tbody>
</table>
		</form>			
  </div>
  </div>
  
<?php include_once 'files.php';?>

<script  src="js/index.js"></script>
<body>
</html>