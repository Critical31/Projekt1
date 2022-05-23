<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Prosta Baza Danych</title>

	
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

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="navbar-collapse collapse">
            <a class="navbar-brand"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
				<ul class="nav navbar-nav pull-right">
                 
                    <li><a class="btn" href="{$conf->action_root}calcShow">Kalkulator</a></li>
					<li><a class="btn" href="{$conf->action_url}logout">Wyloguj</a></li>
                    
                   
				</ul>
			</div><!--/.nav-collapse -->
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">


		<div class="row">
			
			<!-- Article main content -->
			




<div>
<form action="{$conf->action_root}personSave" method="post">
	<fieldset>
		<legend>Dane osoby</legend>
		<div>
            <label for="name">imię</label>
            <input id="name" type="text" placeholder="imię" name="name" value="{$form->name}">
        </div>
		<div>
            <label for="surname">nazwisko</label>
            <input id="surname" type="text" placeholder="nazwisko" name="surname" value="{$form->surname}">
        </div>
		<div>
            <label for="birthdate">data ur.</label>
            <input id="birthdate" type="text" placeholder="data ur." name="birthdate" value="{$form->birthdate}">
        </div>
		<div>
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a href="{$conf->action_root}personList">Powrót</a>
		</div>
	</fieldset>
   
    <input type="hidden" name="id" value="{$form->id}">
    <div style="margin-top: 20px;">
     {include file='messages.tpl'}
    </div>
</form>	
</div>





			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">


		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2022, Jakub Burzej. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>




</body>
</html>