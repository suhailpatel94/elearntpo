<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../../css/common.css">
  <title></title>

  <?php
	require 'commonlinks.php';
  ?>
  <!-- Bootstrap -->
 
  <style>
  
	.popular a:link,.popular a:visited{
		color:black;
		text-decoration:none;
	}
	
	.c_info{
		display:flex;
		
	}
	
	.c_info div{
		flex:1;
	}
  </style>
  
</head>
	<body style="background-color:#F4F3F2;">

	  <?php require 'navbar.html';?>

		<div class="container" id="cwrap">
			<canvas id="myChart"></canvas>
		</div>
	  
	  <div class="popular container">
		<?php

		require 'dbinfo.php';
		$query="select * from courses where popular=1";
		$data=mysqli_query($con,$query);

		while($orow=mysqli_fetch_array($data)){
			$course_id=$orow['id'];
		  $course_name=$orow['cname'];
		  $course_img=$orow['cimg'];
		  $enrolled=$orow['enrolled'];
		  $start_time=$orow['start'];
		  ?>
		  <div class="col-lg-4 col-md-6 col-xs-12 thumb">
			<a class="thumbnail" href="courseInfo.php/?cid=<?php echo $course_id; ?>">
			  <img class="img-responsive" src="../course_pics/<?php echo $course_img ;?>" alt="">
			  <h3><?php echo $course_name; ?></h3>
				<h5 class="bg-info">
					<div class="c_info">
						<div class="text-left">Enrolled:<?php echo $enrolled;?></div>
						<div class="text-right">Start:<?php echo $start_time;?></div>
					</div>
				</h5>
			</a>
		  </div>
		 
		  <?php
		}
		?>
		<script>
			<?php
			require '../js/chartdata.js';
			?>
		</script>
	  </div>
	</body>
</html>
