
<?php
	
	include 'modul/koneksi.php';
	$con = koneksi();
	
	$BASE_URL	= 'http://localhost/suci';
	$JS_URL		= '';
	
	$URL		= $_SERVER['REQUEST_URI'];
	$REQUEST_URI= strtok($URL,'?');
	
	$pageURL	= str_replace('/suci/','',$REQUEST_URI);
	
	$pageURL	= explode('/',$pageURL);
	$pageDir	= '';
	$pageREQ	= '';
	$pageForm	= '';
	
	$pageContent = ''; $styleContent = '';
	if(count($pageURL) > 0){
		$pageDir = $pageURL[0];
		$JS_URL	 = '';
	}
	if(count($pageURL) > 1){
		$pageREQ = $pageURL[1];
		$JS_URL	 = '../';
		if($pageDir != ''){
			$pageContent='2'; $styleContent='2';
		}
	}
	if(count($pageURL) > 2){
		$pageForm = $pageURL[2];
		
		$JS_URL	 = '../../';
	}
	
	
	$paramsURL	= false;	
	if (strpos($URL,'?') !== false) {
		$pageFormSplit	= explode("?",$URL);
		$paramsURL		= $pageFormSplit[1];
	}
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo $BASE_URL ;?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $BASE_URL ;?>/css/style<?php echo $styleContent; ?>.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo $BASE_URL ;?>/bootstrap/js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo $BASE_URL ;?>/bootstrap/js/bootstrap.min.js"></script>
				
		<link href="<?php echo $BASE_URL ;?>/bootstrap/css/bootstrap-timepicker.min.css" rel="stylesheet">
        <script src="<?php echo $BASE_URL ;?>/bootstrap/js/bootstrap-timepicker.js"></script>
		
		<link href="<?php echo $BASE_URL ;?>/bootstrap/css/datepicker.css" rel="stylesheet">
        <script src="<?php echo $BASE_URL ;?>/bootstrap/js/bootstrap-datepicker.js"></script>
		<title>AIR ANNUQAYAH</title>
</head>

<body>
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8 body">
	<?php
		include 'header.php'; 	
		include 'content'.$pageContent.'.php'; 	
	?>
	</div>
	<div class="col-md-2"></div>
	</div>
	<?php include 'footer.php'; ?>
</body>

</html>