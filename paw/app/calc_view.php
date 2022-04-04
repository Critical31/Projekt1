<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Progressus - Free business bootstrap template by GetTemplate</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a class="btn" href="<?php print(_APP_ROOT); ?>/app/security/logout.php">Wyloguj</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">KALKULATOR ŚREDNIEJ</h1>
				<p class="tagline">PROGRESSUS: free business bootstrap template by <a href="http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus">GetTemplate</a></p>
				
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Prosty kalkulator średniej</h2>
		<p class="text-muted">
			Szybko i prosto wylicz średnią
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Wylicz średnią</h3>
			
			<div class="row">
                <div style="width:90%; margin: 2em auto; text-align:center;">
                    <h1>Kalkulator Średniej</h1>
                    <p style="font-size: 2em;">Wpisz liczby podzielone przecinkami</p>
                    <form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	               
	               <input id="id_liczba" style="font-size: 2em;" type="text" name="liczba" value="<?php if(isset($x)) print($x); ?>" /><br /><br />
	               
	               <input type="submit" value="Oblicz" style="font-size:3em;" />
                    </form>	<br />
                    <p style="text-align: center;">
                        <?php
                        if (isset($messages)) {
	                   if (count ( $messages ) > 0) {
		                  echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:40%; text-align: center; font-size: 1.5em;">';
		                  foreach ( $messages as $key => $msg ) {
			             echo '<li>'.$msg.'</li>';
		                  }
		                  echo '</ol>';
	                       }
                            }
                        ?></p>
                    <?php if (isset($wynik)){ ?>
                    <p style="font-size: 2em;">
                        
                    <?php echo 'Wynik: '.$wynik; ?>
                        
                    </p>
                    
				
			</div> <!-- /row  -->
		
		</div>
            
	</div>
	<!-- /Highlights -->

	
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	
	<!-- /social links -->


	




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>



<?php } ?>
</div>
</body>
</html>