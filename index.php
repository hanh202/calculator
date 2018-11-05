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
	<fieldset id="container">
		<form name="calculator">
			<input id="display" type="text" name="display" readonly>

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
			<input class="button mathButtons" type="button" value="=">
			<input class="button mathButtons" type="button" value="/" >
		</form>
	</fieldset>
</div>
</body>
</html>