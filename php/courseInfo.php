
<!DOCTYPE html>

<html>

	<head>
		<title>a</title>
		<?php require 'commonlinks.php';?>
		
		<style>
		
		
		.sidebr{
			border-radius:100 !important; 
		}
		
		.typical_info .list-group-item{
			display:flex;
			
		}
		
		.blockelementleft{
		flex:1;
		
		}
		
		.blockelement{
			flex:2;
		}
		
		.blockelement{
			
		}
		
		.panel,.list-group-item{
			border-radius:0 !important; 
		}
		
		.panel-heading{
			background-color:white !important;
		}
		</style>
		
	</head>

	<body>
		<link rel="stylesheet" type="text/css" href="../../css/common.css">

	<?php
	require 'navbar.html';
	require 'dbinfo.php';
	$id=$_GET['cid'];
	 $query="select * from courses where id='$id'";
	 $data=mysqli_query($con,$query);
	$orow=mysqli_fetch_array($data);
	
	?>
	<section class="info">
		<div class="container">
		
			<div class="row" style="margin:0 !important;
			padding:0 !important;">
				<div class="panel panel-default" style="">
					<div class="panel-body" style="">
						<div class="col-lg-4" >
							 <img src="../../course_pics/<?php echo $orow['cimg'] ?>" class="img-responsive" >
						</div>
				
						<div class="col-lg-8">
							 <div class="text-center"><h2><?php echo $orow['cname'];?></h2></div>
						</div>
					</div>
				</div>
			</div>
		
			<div class="row">
				<div class="col-lg-9">
					<div class="panel panel-default">
					  <div class="panel-heading"><h4>About the Course</h4></div>
					  <div class="panel-body"><?php echo nl2br($orow['about']);?></div>
					</div>
				
					<div class="panel panel-default">
					  <div class="panel-heading"><h4>Course Prerequisites</h4></div>
					  <div class="panel-body"><?php echo nl2br($orow['prerequisite']);?></div>
					</div>
				</div>
				
				<div class="sidebr col-lg-3">
					 <ul class="list-group typical_info">
					  <li class="list-group-item"><div class="blockelementleft">Length:</div><div class="blockelement"><?php echo $orow['length']; ?></div></li>
					  <li class="list-group-item"><div class="blockelementleft">Effort:</div><div class="blockelement"><?php echo $orow['effort']; ?></div></li>
					  <li class="list-group-item"><div class="blockelementleft">Subject:</div><div class="blockelement"><?php echo $orow['subject']; ?></div></li>
					  <li class="list-group-item"><div class="blockelementleft">Level:</div><div class="blockelement"><?php echo $orow['level']; ?></div></li>
					  <li class="list-group-item"><div class="blockelementleft">Language:</div><div class="blockelement"><?php echo $orow['language']; ?></div></li>
					
					</ul>
				</div>
				
			</div>
			
		</div>
	</section>
	
	</body>

	</html>
