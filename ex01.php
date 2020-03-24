//Amine EJJORFI

<!DOCTYPE html>
<html>
<head>
	<title>Delice des Fruits & Legumes</title>
	<style type="text/css">
		h2{
			text-align: center;
		}
		.container{
			width: 100%;
		}
		.container>div{
			display: inline-block;
			width: 33%;
			height: 260px;
		}
		.container>div>img{
			max-width: 100%;
			height: 100%;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Delice des Fruits & Legumes</h2>
		<?php
			$arr = ['img/1.jpg','img/2.jpg','img/3.jpg','img/4.jpg','img/5.jpg','img/6.jpg'];
			shuffle($arr);
			for ($i=0; $i <count($arr); $i++) { 
				echo "<div><img src='$arr[$i]'></div>";
			}
		?>
	</div>
</body>
</html>
