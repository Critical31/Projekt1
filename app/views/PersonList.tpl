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
<form action="{$conf->action_url}personList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="nazwisko" name="sf_surname" value="{$searchForm->surname}" /><br />
		<button type="submit" style="margin-top: 10px;">Filtruj</button>
	</fieldset>
</form>
</div>	





<div style="margin-top: 10px;">
<a href="{$conf->action_root}personNew" style="margin-top: 10px; border-style: solid; border-width: 1px 1px 1px 1px; border-color: darkcyan; background-color: cyan; color: black; padding: 4px;">+ Nowa osoba</a>
</div>	

<table id="tab_people" style="margin-top: 20px; border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center;">
<thead>
	<tr style="border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center; padding: 5px;">
		<th style="border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center; padding: 5px;">imię</th>
		<th style="border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center; padding: 5px;">nazwisko</th>
		<th style="border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center; padding: 5px;">data ur.</th>
		<th style="border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center; padding: 5px;">opcje</th>
	</tr>
</thead>
<tbody>
{foreach $people as $p}
{strip}
	<tr style="border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center; padding: 5px;">
		<td style="border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center; padding: 5px;">{$p["name"]}</td>
		<td style="border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center; padding: 5px;">{$p["surname"]}</td>
		<td style="border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center; padding: 5px; ">{$p["birthdate"]}</td>
		<td style="border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center; padding: 5px;">
			<a href="{$conf->action_url}personEdit&id={$p['idperson']}">Edytuj</a>
			&nbsp;
			<a href="{$conf->action_url}personDelete&id={$p['idperson']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>



			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	<div style="margin-top: 20px;">
     {include file='messages.tpl'}
    </div>

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