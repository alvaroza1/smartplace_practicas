<?php 
header("Expires: Mon, 20 Mar 1998 12:01:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-type: text/html; charset=utf-8');
setlocale(LC_ALL,'es_MX');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ejemplo</title>
	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   	<link href="<?=base_url('resources/css/styles.css')?>" type="text/css" rel="stylesheet"/> 
    <link href="<?=base_url('twitter_boot/css/bootstrap.min.css')?>" type="text/css" rel="stylesheet"/>
    <link href="<?=base_url('twitter_boot/css/bootstrap-responsive.min.css')?>" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="<?=base_url('resources/js/Jquery.js')?>"></script>
	<script type="text/javascript" src="<?=base_url()?>twitter_boot/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="brand" href="<?=base_url('')?>"> Ejemplo</a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li class="">
						<a href="<?=base_url('clientes')?>">Clientes</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
