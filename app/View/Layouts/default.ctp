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

		echo $this->Html->script(array('jquery', 'bootstrap'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<header>
		<div class="hidden-xs">
			<?php echo $this->element('menu'); ?>
		</div>
		<div class="visible-xs">
			<?php echo $this->element('menu-xs'); ?>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 logo">
			<div class="jumbotrone row">
				
				<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-5 col-xs-12">
					<?php echo $this->Html->image('logo.png', array('alt' => $cakeDescription, 'border' => '0', 'class'=>'img-responsive'));?>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-7">
					<h3 class="slogam text-right hidden-xs">Servicio y Venta de Insumos Informáticos</h3>
				</div>			
			</div>
			<!--
			<a onclick="o=window.open;o('https://siteheart.com/webconsultation/98611?', 'siteheart_sitewindow_98611', 'width=550,height=400,top=30,left=30,resizable=yes'); return false;" href="https://siteheart.com/webconsultation/98611?" target="siteheart_sitewindow_98611">
				<img src="http://webindicator.siteheart.com/webindicator/image/1402180667?ent=98611&company=98611" border="0" alt="SiteHeart" class="chat img-responsive hidden-xs pull-right"/>
				<img src="http://webindicator.siteheart.com/webindicator/image/1402180667?ent=98611&company=98611" border="0" alt="SiteHeart" class="chat-xs img-responsive visible-xs pull-right"/>
			</a>-->
			<!--
			<a onclick="o=window.open;o('https://siteheart.com/webconsultation/710516?', 'siteheart_sitewindow_710516', 'width=550,height=400,top=30,left=30,resizable=yes'); return false;" href="https://siteheart.com/webconsultation/710516?" target="siteheart_sitewindow_710516">
				<img src="http://webindicator.siteheart.com/webindicator/image/1402180667?ent=710516&company=710516" border="0" alt="SiteHeart" class="chat img-responsive hidden-xs pull-right"/>
				<img src="http://webindicator.siteheart.com/webindicator/image/1402180667?ent=710516&company=710516" border="0" alt="SiteHeart" class="chat-xs img-responsive visible-xs pull-right"/>
			</a>-->
		</div>
		
	</header>
	<div id="container">
		<div id="content">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
				
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
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-right">
								<span class=" glyphicon glyphicon-map-marker"></span>
							</div>
							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
								<address>
									Boulevard Pellegrini 2735<br>
									Santa Fe | CP 3000 | Argentina
								</address>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-right">
								<span class="glyphicon glyphicon-envelope"></span>
							</div>
							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
								<address>
									ventas@printaargentina.com.ar<br>
									tintas2006@yahoo.com.ar
								</address>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-right">
								<span class="glyphicon glyphicon-earphone"></span>
							</div>
							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
								<address>
									0054 - (0342) - 4566748<br>
									0054 - (0342) - 156136940
								</address>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>	
	</div>
	<?php echo $this->element('sql_dump'); ?>
	    <!-- Start SiteHeart code -->
	 
    <script>
    (function(){
    // your widget ID
    var widget_id = 710516;
    _shcp = [{widget_id : widget_id}];
    // set default language
    var lang = (navigator.language || navigator.systemLanguage
    || navigator.userLanguage || "en")
    .substr(0, 2).toLowerCase();
    // script url
    var url = "widget.siteheart.com/widget/sh/" + widget_id + "/"
    + lang + "/widget.js";
    var hcc = document.createElement("script");
    hcc.type = "text/javascript";
    hcc.async = true;    
    hcc.src = ("https:" == document.location.protocol ? "https" : "http")
    + "://" + url;
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hcc, s.nextSibling);
    })();
    </script>
    <!-- End SiteHeart code -->
</body>
</html>




