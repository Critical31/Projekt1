<?php
/* Smarty version 4.1.1, created on 2022-05-24 00:15:38
  from 'C:\xampp\htdocs\paw2\app\views\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_628c078a7916f9_04000027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '275a074d5d17d4fe5919e390716af62eb95843c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw2\\app\\views\\calc_view.tpl',
      1 => 1653344109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_628c078a7916f9_04000027 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="assets/js/html5shiv.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/respond.min.js"><?php echo '</script'; ?>
>
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
                    <li><a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList">Baza</a></li>
					<li><a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
                    
                    <span style="float:right; padding: 1em; color:darkgrey;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
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
                    
                    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
	               
	               <input id="id_liczba" style="font-size: 2em;" type="text" name="liczba" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" /><br /><br />
	               
	               <input type="submit" value="Oblicz" style="font-size:3em;" />
                    </form>	<br />
                    <div style="text-align: center; width: 100%; align-content: center;">
                    <div style="margin: 20px; padding: 10px 10px 10px 10px; border-radius: 5px; background-color: #f88; width:20%px; text-align: center;">
                                
                    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    
                    </div>
                    </div>
                    
                    <div style="margin: 20px; padding: 10px 10px 10px 10px; border-radius: 5px; background-color:darkcyan; width:20%px; text-align: center; color: black;">
                    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->wynik))) {?>
	               <h4 style="font-size: 30px;">Wynik</h4>
	               <p class="res" style="font-size: 2em;">
	               <?php echo $_smarty_tpl->tpl_vars['res']->value->wynik;?>

	               </p>
                    <?php }?>
                </div>
                 
                    
				
			</div> <!-- /row  -->
		
		</div>
            
	</div>
	<!-- /Highlights -->

	
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	
	<!-- /social links -->


	




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/jQuery.headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/template.js"><?php echo '</script'; ?>
>



<?php echo '<?php'; ?>
 } <?php echo '?>'; ?>

</div>
</body>
</html><?php }
}
