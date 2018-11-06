<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Calculator</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="container">
<?php
	if(isset($_GET['display'])){
		echo $_GET['display'];
	}else{
		echo '';
	}
?>
	<form action="" method="get">
		<h2>Calculator basic</h2>
		<input type="number" name="numA">
		<select name="oprator">
			<option value="add" name="add">+</option>
			<option value="minus" name="minus">-</option>
			<option value="multiplication" name="multiplication">*</option>
			<option value="division" name="division">/</option>
		</select>
		<input type="number" name="numB">
		<br>
		<input type="submit" value="result">
		<br>
		<p class="result">
			<?php

				$numA=isset($_GET['numA'])?$_GET['numA']:'';
				$numB=isset($_GET['numB'])?$_GET['numB']:'';
				$oprator=isset($_GET['oprator'])?$_GET['oprator']:'';
				if($numA!=='' && $numB !=='' && $oprator!==''){
					echo "vao if";
					if($oprator==='add'){
						echo $numA+$numB;
					}else if($oprator==='minus'){
						echo $numA-$numB;
					}else if($oprator==='multiplication'){
						echo $numA*$numB;
					}else if($oprator==='division'){
						echo $numA/$numB;
					}
				}
			?>
		</p>
	</form>
	



	<fieldset id="container">
		<form name="calculator" method="get" action="./index.php">
			<input id="display" type="text" name="display" value="hanh" readonly>

			<input class="button digits" type="button" value="7" >
			<input class="button digits" type="button" value="8">
			<input class="button digits" type="button" value="9">
			<input class="button mathButtons" type="button" value="+" >
			<br>
			<input class="button digits" type="button" value="4">
			<input class="button digits" type="button" value="5">
			<input class="button digits" type="button" value="6">
			<input class="button mathButtons" type="button" value="-">
			<br>
			<input class="button digits" type="button" value="1" >
			<input class="button digits" type="button" value="2">
			<input class="button digits" type="button" value="3" >
			<input class="button mathButtons" type="button" value="x">
			<br>
			<input id="clearButton" class="button" type="button" value="C" >
			<input class="button digits" type="button" value="0" >
			<input class="button mathButtons" type="submit" value="=">
			<input class="button mathButtons" type="button" value="/" >
		</form>
	</fieldset>
</div>
</body>
</html>