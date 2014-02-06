<?php echo $this -> Html -> script(array('jquery.js', 'carousel.js'));?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Wrapper for slides -->
	<div class="carousel-inner">
    	<div class="item active">
    		<div class="col-md-12 ">
    			<div class="col-md-3 col-sm-3">
      				<?php echo $this->Html->image('logos/lexmark_50px.png', array('class'=>'marcas img-responsive', 'align'=>'center'));?>
    			</div>
    			<div class="col-md-3 col-sm-3">
      				<?php echo $this->Html->image('logos/olivetti_50px.png', array('class'=>'marcas img-responsive'));?>
    			</div>
    			<div class="col-md-3">
      				<?php echo $this->Html->image('logos/HP_50px.png', array('class'=>'marcas img-responsive'));?>
      			</div>
      			<div class="col-md-3">
      				<?php echo $this->Html->image('logos/canon_50px.png', array('class'=>'marcas img-responsive'));?>
      			</div>
    		</div>
    	</div>
    	<div class="item">
    		<div class="col-md-12">
    			<div class="col-md-4">
    				<?php echo $this->Html->image('logos/brother_50px.png', array('class'=>'marcas img-responsive'));?>
    			</div>
    			<div class="col-md-4">
    				<?php echo $this->Html->image('logos/epson_50px.png', array('class'=>'marcas img-responsive'));?>
    			</div>
    			<div class="col-md-4">
    				<?php echo $this->Html->image('logos/samsung_50px.png', array('class'=>'marcas img-responsive'));?>
    			</div>
    		</div>
    	</div>
  	</div>

	<!-- Controls -->
	<!--
  	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    	<span class="glyphicon glyphicon-chevron-left"></span>
  	</a>
  	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
  	</a>-->
</div>
