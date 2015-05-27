<!DOCTYPE html>
<html>
	<head>
		<title>DataDate - <?php echo $title;?></title>
		<base href="<?php echo $base_url;?>">
		<link rel='stylesheet' href='public/css/main.css'>
		<?php
foreach ($cssFiles as $cssFile) {
?>
<link rel='stylesheet' href='public/css/<?php echo $cssFile;?>'>
<?php
}
		?>
	</head>
	<body>
		<div id='header'>
			<h1>DataDate</h1>
		</div>