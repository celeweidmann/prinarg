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