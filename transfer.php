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
				<h1 class="page-header" style="font-size:30px; color:black"><b>Transfer</b></h1>
			</div>
		</div><!--/.row--><!--/.row-->
		<div class="col-lg-2"></div>
		<?php 

        $DataNine[]= $adminDao->allAboutById(9);
		if ($DataNine) {
			$count=1;
			foreach ($DataNine as $nine){ 		       
		?>
		<div class="col-lg-12">
	<div>
   <form id="frm" method="post" enctype="multipart/form-data" action="<?php echo $siteUrl;?>controller/AdminController.php">
    <input type="hidden" name="action_type" value="update">
	<input type="hidden" name="id" value="<?php echo $trip->id;?>">
	<input type="hidden" name="sender" value="<?php echo $trip->name;?>">
	
	<?php 

        $DataOne[]= $adminDao->allAboutById(1);
		if ($DataOne) {
			$count=1;
			foreach ($DataOne as $one){ 
		       
		?>
	
    <table style="margin-left:100px;">		 
	<?php 

        $DataTwo[]= $adminDao->allAboutById(2);
		if ($DataTwo) {
			$count=1;
			foreach ($DataTwo as $two){ 
		       
		?>
<tbody>
	<?php 

        $DataThree[]= $adminDao->allAboutById(3);
		if ($DataThree) {
			$count=1;
			foreach ($DataThree as $three){ 
		       
		?>
<tr>
	
	<?php 

        $DataFour[]= $adminDao->allAboutById(4);
		if ($DataFour) {
			$count=1;
			foreach ($DataFour as $four){ 
		       
		?>
	
	<td style="color:black;font-size:16px; align:right"><b>Transfer Credits from</td>
	
	<?php 

        $DataTen[]= $adminDao->allAboutById(10);
		if ($DataTen) {
			$count=1;
			foreach ($DataTen as $ten){ 		       
		?>
		
	<td  style="color:black;font-size:15px; align:left"><?php echo $trip->name;?></td>
</tr>
	<?php 

        $DataFive[]= $adminDao->allAboutById(5);
		if ($DataFive) {
			$count=1;
			foreach ($DataFive as $five){ 
		       
		?>
<tr>
	<?php 

        $DataSix[]= $adminDao->allAboutById(6);
		if ($DataSix) {
			$count=1;
			foreach ($DataSix as $six){ 
		       
		?>
	<td style="color:black;font-size:16px; align:right"><b>Transfer Credits to</td>
	<?php 

        $DataSeven[]= $adminDao->allAboutById(7);
		if ($DataSeven) {
			$count=1;
			foreach ($DataSeven as $seven){ 		       
		?>
	
	<td>
	<?php 

        $DataEight[]= $adminDao->allAboutById(8);
		if ($DataEight) {
			$count=1;
			foreach ($DataEight as $eight){ 		       
		?>

	<select name="transfer"  >
		 <option>Select One  </option>
         <option value="1">Devanshi - Credits : <?php echo $one->ccredits;?></option>
	     <option value="2">Tanisha  - Credits : <?php echo $two->ccredits;?></option>
	     <option value="3">Aditya   - Credits : <?php echo $three->ccredits;?></option>
		 <option value="4">Raj   - Credits : <?php echo $four->ccredits;?></option>
		 <option value="5">Ayush   - Credits : <?php echo $five->ccredits;?></option>
		 <option value="6">Priya   - Credits : <?php echo $six->ccredits;?></option>
		 <option value="7">Saurabh   - Credits : <?php echo $seven->ccredits;?></option>
		 <option value="8">Lila   - Credits : <?php echo $eight->ccredits;?></option>
		 <option value="9">Bhanu   - Credits : <?php echo $nine->ccredits;?></option>
		 <option value="10">Chetna   - Credits : <?php echo $ten->ccredits;?></option>
			</select></td>
</tr>
<input type="hidden" name="two" value="<?php echo $two->ccredits;?>">
<input type="hidden" name="three" value="<?php echo $three->ccredits;?>">
	
<tr>
	<td style="color:black;font-size:16px; align:center"><b>Credits</td>
	<td><input type="text" name="credits" placeholder="Enter credits to transfer"></td>	
</tr>

<tr>
	<td style="color:black;font-size:16px; align:center"><b>Current Credits</td>
	<input type="hidden" name="ccredits" value="<?php echo $trip->ccredits;?>">
	<td style="color:black;font-size:15px; align:center"><?php echo $trip->ccredits;?></td>
</tr>	

<tr>
<td></td>
</tr>

<tr>
	<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	<input type="submit" style="font-size:15px;" value="Transfer"></input></td>
</tr>
<?php $count++;}}else{echo "<tr><td colspan='9'>No details..</td></tr>";}?>
<?php $count++;}}else{echo "<tr><td colspan='9'>No details..</td></tr>";}?>
<?php $count++;}}else{echo "<tr><td colspan='9'>No details..</td></tr>";}?>
<?php $count++;}}else{echo "<tr><td colspan='9'>No details..</td></tr>";}?>
<?php $count++;}}else{echo "<tr><td colspan='9'>No details..</td></tr>";}?>
<?php $count++;}}else{echo "<tr><td colspan='9'>No details..</td></tr>";}?>
<?php $count++;}}else{echo "<tr><td colspan='9'>No details..</td></tr>";}?>
<?php $count++;}}else{echo "<tr><td colspan='9'>No details..</td></tr>";}?>
<?php $count++;}}else{echo "<tr><td colspan='9'>No details..</td></tr>";}?>
<?php $count++;}}else{echo "<tr><td colspan='9'>No details..</td></tr>";}?>
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