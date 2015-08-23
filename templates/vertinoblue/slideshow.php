 <?php    

	$caption1 	= $this->params->get("caption1", "");     
	$caption2 	= $this->params->get("caption2", "");    
	$caption3 	= $this->params->get("caption3", ""); 
	$caption4 	= $this->params->get("caption4", "");   
	
	$image1		= htmlspecialchars($this->params->get('image1'));  
	$image2		= htmlspecialchars($this->params->get('image2'));
	$image3		= htmlspecialchars($this->params->get('image3'));  
	$image4		= htmlspecialchars($this->params->get('image4'));  
	
	$slidedisable = $this->params->get("slidedisable");
 
 ?>  
 
 <div id="wrapper-slide">	   	      
	<div id="slide">		         
		<div id="slider" class="nivoSlider"> 		 	  
			<img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($image1); ?>" alt="image1" title="<?php echo $caption1 ?>" />	      
			<img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($image2); ?>" alt="image2" title="<?php echo $caption2 ?>" />          
			<img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($image3); ?>" alt="image3" title="<?php echo $caption3 ?>" />    
			<img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($image4); ?>" alt="image3" title="<?php echo $caption4 ?>" /> 
		</div>	 
	</div>  
 </div>