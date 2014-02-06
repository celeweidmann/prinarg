<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Printa Argentina');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('layout');
		echo $this->Html->css('bootstrap');

		echo $this->Html->script(array('jquery', 'dropdown'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<ul class="nav navbar-nav navbar-right">
      			<li><?php echo $this->Html->link("Inicio", array('controller'=>'pages', 'action'=>'home'), array( 'class' => 'menu-principal'))?></li>
      			<li class="dropdown">
    				<a class="dropdown-toggle menu-principal" data-toggle="dropdown" href="#" style="padding-bottom: 9px">
      					Reciclados <span class="caret"></span>
    				</a>
    				<ul class="dropdown-menu">
    					<ul class="list-inline">
      					<li><?php echo $this->Html->link("Firmware Disponible", array('controller'=>'pages', 'action'=>'firmware'), array( 'class' => 'submenu'))?></li>
      					<li><?php echo $this->Html->link("Reciclados", array('controller'=>'pages', 'action'=>'reciclado'), array( 'class' => 'submenu'))?></li>
      					<!--
      					<li><?php echo $this->Html->link("Recuperación", array('controller'=>'pages', 'action'=>'recuperacion'), array( 'class' => 'submenu'))?></li>
      					<li><a class="submenu">Costos</a></li>
      					<li><a class="submenu">Preguntas Frecuentes</a></li>-->
      					</ul>
    				</ul>
  				</li>
      			<li><?php echo $this->Html->link("Ubicacion", array('controller'=>'pages', 'action'=>'ubicacion'), array( 'class' => 'menu-principal'))?></li>
      			<li><?php echo $this->Html->link("Contacto", array('controller'=>'contactos', 'action'=>'index'), array( 'class' => 'menu-principal'))?></li>
      			&nbsp;
      		</ul>
		</nav>
		<div class="col-md-12 logo">
			<div class="jumbotrone row">
				
				<div class="col-md-3 col-md-offset-1">
					<?php echo $this->Html->image('logo.png', array('alt' => $cakeDescription, 'border' => '0'));?>
				</div>
				<div class="col-md-7">
					<h3 class="slogam text-right">Servicio y Venta de Insumos Informáticos</h3>
				</div>			
			</div>
		</div>
	</header>
	<div id="container">
		<div id="content">
			<div class="col-md-10 col-md-offset-1">
				
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			
			</div>
		</div>
		<!--<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>

		</div>-->
		<footer>
			<div class="col-md-12 col-sm-12 footer">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="row">
							<div class="col-md-3 col-sm-3 text-right">
								<span class=" glyphicon glyphicon-map-marker"></span>
							</div>
							<div class="col-md-9 col-sm-9">
								<address>
									Boulevard Pellegrini 2735<br>
									Santa Fe | CP 3000 | Argentina
								</address>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="row">
							<div class="col-md-3 col-sm-3 text-right">
								<span class="glyphicon glyphicon-envelope"></span>
							</div>
							<div class="col-md-9 col-sm-9">
								<address>
									ventas@printaargentina.com.ar<br>
									tintas2006@yahoo.com.ar
								</address>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="row">
							<div class="col-md-3 col-sm-3 text-right">
								<span class="glyphicon glyphicon-earphone"></span>
							</div>
							<div class="col-md-9 col-sm-9">
								<address>
									0054 - (0342) -4566748<br>
									0054 - (0342) -156136940
								</address>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>	
	</div>
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>