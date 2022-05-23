<?php
/* Smarty version 4.1.1, created on 2022-05-24 00:23:16
  from 'C:\xampp\htdocs\paw\app\views\PersonList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_628c0954d96f11_56829273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abaccddf2d536251e98fd470a20f0ba1b7e7dc5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\app\\views\\PersonList.tpl',
      1 => 1653343893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_628c0954d96f11_56829273 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
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
	<?php echo '<script'; ?>
 src="assets/js/html5shiv.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="navbar-collapse collapse">
            <a class="navbar-brand"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
				<ul class="nav navbar-nav pull-right">
                    <li><a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcShow">Kalkulator</a></li>
					<li><a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
                    
                   
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
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="nazwisko" name="sf_surname" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->surname;?>
" /><br />
		<button type="submit" style="margin-top: 10px;">Filtruj</button>
	</fieldset>
</form>
</div>	





<div style="margin-top: 10px;">
<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personNew" style="margin-top: 10px; border-style: solid; border-width: 1px 1px 1px 1px; border-color: darkcyan; background-color: cyan; color: black; padding: 4px;">+ Nowa osoba</a>
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
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
<tr style="border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center; padding: 5px;"><td style="border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center; padding: 5px;"><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td style="border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center; padding: 5px;"><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</td><td style="border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center; padding: 5px; "><?php echo $_smarty_tpl->tpl_vars['p']->value["birthdate"];?>
</td><td style="border: 1px 1px 1px 1px; border-color:  black; border-style: solid; text-align: center; padding: 5px;"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['idperson'];?>
">Edytuj</a>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete&id=<?php echo $_smarty_tpl->tpl_vars['p']->value['idperson'];?>
">Usuń</a></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>



			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	<div style="margin-top: 20px;">
     <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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

</body>
</html><?php }
}
