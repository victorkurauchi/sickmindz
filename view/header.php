<?php
  ob_start('ob_gzhandler');
  session_start();
  header('Content-Type: text/html; charset=UTF-8');
  date_default_timezone_set('America/Sao_Paulo');
?>

<!doctype html>
<html lang="pt-br">
	<head>
    	<title>sickmindz</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta charset="UTF-8">
		  <meta name="author" content="Sickmindz">
		  <meta name="keywords" content="sickmindz thoughts pensamentos frases fics letras historias rimas prosa poesia">
		  <meta name="description" content="O que é ? Uma rede com o intuito de englobar os seus mais diversos colapsos cotidianos. Ou seja, qualquer ideia, frase, história, citação, romance, angústia, vontade. Tudo aquilo que você gostaria de guardar para ler depois, porém sem saber onde. Aqui é o seu lugar.">

    	<link rel="stylesheet" href="css/bootstrap-v2.css" />	
      <link rel="stylesheet" href="css/bootstrap-responsive.css" />  
  	</head>

 	<body>
    	<div class="container">

      		<div class="masthead">
        		<h3 class="muted">Sickmindz ~ mantenha sua mente aberta</h3>
        		<div class="navbar">
          			<div class="navbar-inner">
            			<div class="container">
              				<ul class="nav">
                				<li class="active"><a href="index.php">Início</a></li>
				               	<li><a href="?page=project">Projetos</a></li>
				                <li><a href="http://outtofmymindd.tumblr.com/" target="_blank">Blog</a></li>
				                <li><a href="?page=about">Sobre</a></li>
				                <li><a href="?page=contact">Contato</a></li>
              				</ul>

                      <div class="pull-right">
                        <a href="#" title="Entrar"> <i class="icon-lock" id="icon-btn"></i> </a>
                      </div>
            			</div> <!-- /.containter -->
          			</div> <!-- /.navbar-inner -->
       			</div> <!-- /.navbar -->
      		</div> <!-- /.masthead -->