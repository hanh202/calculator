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
	<form action="" method="post">
		<h2>Calculator basic</h2>
		<input type="number" name="numA" value='<?php echo isset($_POST['numA'])? $_POST['numA'] : false ?>'>
		<select name="oprator">
			<option value="add" name="add">+</option>
			<option value="minus" name="minus">-</option>
			<option value="multiplication" name="multiplication">*</option>
			<option value="division" name="division">/</option>
		</select>
		<input type="number" name="numB" value='<?php echo isset($_POST['numB'])? $_POST['numB'] : false ?>'>
		<br>
		<input type="submit" value="result">
		<br>
		<p class="result">
			<?php
//                $exprssions = ['+', '-', 'x', ':'];
//
//                + , - , *, /
//                $arr = explode('+', '1+2');
//
//                $arr = [1, 2];
//                if($express == '+')


				$numA=isset($_POST['numA'])?$_POST['numA']:'';
				$numB=isset($_POST['numB'])?$_POST['numB']:'';
				$oprator=isset($_POST['oprator'])?$_POST['oprator']:'';
				if($numA!=='' && $numB !=='' && $oprator!==''){
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

    <?php
        $arr=['++','--','**','//','*/','/*'];
        $bt=(isset($_GET['bieuThuc']))?$_GET['bieuThuc']:'';
        $result=(isset($_GET['result']))?$_GET['result']:'';

        for($i=0;$i<count($arr);$i++){
            if(strpos($bt,$arr[$i])) {
                $error=true;
            }
        }
        if($bt[0]==='*' || $bt[0]==='/' || $bt[-1]==='*' || $bt[-1]==='/'){
            $error=true;
        }

        if(!$error) {
            $result = eval('return ' . $bt . ';');
        }else{
            $result='syntax error';
        }
    ?>




	<fieldset id="container">
		<form name="calculator" method="GET" action="./index.php">
			<input id="bieuThuc" class="display" type="text" name="bieuThuc" value='<?php echo $bt ?>' readonly>
            <input id="result" class="display" type="text" name="result" value="<?php echo $result ?>" readonly>

			<input class="button digits" type="button" value="7">
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
			<input class="button mathButtons" type="button" value="*">
			<br>
			<input id="clearButton" class="button" type="button" value="C" >
			<input class="button digits" type="button" value="0" >
			<input class="mathButtons result" type="submit" value="=">
			<input class="button mathButtons" type="button" value="/" >
		</form>
	</fieldset>
</div>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){

       var input='';

       $('#clearButton').on('click',function(){
           $('#bieuThuc').val('');
           $('#result').val('');
       });

       $('input.button').on('click',function(){
           var value=$(this)[0].value;
           if(value === 'C'){
               input = '';
           }else {
               input = input + value;
               $('#bieuThuc').val(input);
           }
       });
    });
</script>
</body>
</html>