<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Strona główna</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo URL; ?>/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>/css/style.css">
	<script src="<?php echo URL; ?>/js/jquery.min.js"></script>
	<script src="<?php echo URL; ?>/bootstrap/js/bootstrap.min.js"></script>
	<!-- bootstrap-select Plugin-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
	<script src="<?php echo URL; ?>/js/script.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#">Logo</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo URL . "/index.php"; ?>">Strona główna</a></li>
					<li><a href="<?php echo URL . "/index.php?page=users"; ?>">Lista użytkowników</a></li>
					<li><a href="<?php echo URL . "/index.php?page=books"; ?>">Lista książek</a></li>
					<li><a href="<?php echo URL . "/index.php?page=login"; ?>">Logowanie</a></li>
					<li><a href="<?php echo URL . "/index.php?page=signup"; ?>">Rejestracja</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo URL . "/index.php?page=login"; ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
    <div class="container-fluid">    
		<div class="row content">