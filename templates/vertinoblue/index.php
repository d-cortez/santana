<?php

	// no direct access
	defined('_JEXEC') or die('Restricted access');
	JHtml::_('behavior.framework', true);

	$app = JFactory::getApplication();
	$templateparams     = $app->getTemplate(true)->params; 
	$csite_name	= $app->getCfg('sitename');
?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">	  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >	 
<head>		     
 
	<jdoc:include type="head" />  

	<?php  # main width#
		$mod_left = $this->countModules( 'position-5' );
		$mod_right = $this->countModules( 'position-7' );
		if ( $mod_left && $mod_right ) {
			$width = '';
		} elseif ( ($mod_left || $mod_right) ) {
			$width = '-mid';
		} else {
			$width = '-full';
		}
		
		$logo = $this->params->get("logo", "Paróquia de Sant'Ana");
		$effect= $this->params->get("effect", "sliceUpDown");
		$animSpeed= $this->params->get("animSpeed", "400");
		$pauseTime= $this->params->get("pauseTime", "2500");
	
		$facebook	=	htmlspecialchars($this->params->get('facebook'));  
		$twitter	=	htmlspecialchars($this->params->get('twitter')); 
		$rss		=	htmlspecialchars($this->params->get('rss')); 
		$linkedin	=	htmlspecialchars($this->params->get('linkedin'));
		$facebookurl=	htmlspecialchars($this->params->get('facebookurl')); 
		$twitterurl	=	htmlspecialchars($this->params->get('twitterurl')); 
		$rssurl		=	htmlspecialchars($this->params->get('rssurl')); 
		$linkedinurl=	htmlspecialchars($this->params->get('linkedinurl'));
    ?>	 	

	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/vertinoblue/css/tdefaut.css" type="text/css" media="all" /> 
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/jquery.js"></script>   	  
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/superfish.js"></script>  
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/hoverIntent.js"></script>	
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/nivo.slider.js"></script>	
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/scroll.js"></script> 	   
	<link rel="icon" type="image/gif" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon.gif" />	
	<link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

	<script type="text/javascript">            
		var $j = jQuery.noConflict(); 	   
		$j(document).ready(
			function() {	     
			$j('.navigation ul').superfish({		  
				delay:       800,                      
				animation:   {opacity:'show',height:'show'},  		
				speed:       'normal',                      
				autoArrows:  false,                          
				dropShadows: true                         
			});
		}); 	
	</script>       

	<script type="text/javascript">     
		var $j = jQuery.noConflict();       
		jQuery(document).ready(
			function ($){     
				$j("#slider").nivoSlider(            
				{effect: "<?php echo $effect; ?>",            
					slices: 15,            
					boxCols: 8,          
					boxRows: 4,         
					animSpeed: <?php echo $animSpeed; ?>,
					pauseTime: <?php echo $pauseTime; ?>,
					captionOpacity: 0.5      
				}); 
			});          
	</script>			 

 </head>

 <body> 
 
	<div id="header">
		
		<div class="pagewidth">
			
			<div id="sitename">                    			
				<a href="index.php"><?php echo $logo ?></a>
			</div>
			
			<div id="social-links">				
				<li>					
					<ul class="social-list">
						<?php if ($twitter == 1) { ?>					
							<li class="soc1"><a href="<?php echo $twitterurl; ?>"></a></li>
						<?php } ?>
						
						<?php if ($facebook == 1) { ?>							
							<li class="soc2"><a href="<?php echo $facebookurl; ?>"></a></li>
						<?php } ?>
						
						<?php if ($rss == 1) { ?>	
							<li class="soc3"><a href="<?php echo $rssurl; ?>"></a></li>
						<?php } ?>

						<?php if ($linkedin == 1) { ?>	
							<li class="soc4"><a href="<?php echo $linkedinurl; ?>"></a></li>
						<?php } ?>							
						
					</ul>				
				</li>			
			</div>
		</div>
	</div>

	<div class="pagewidth">
        
		<div id="topmenu">				   
            <div class="navigation">                                                    	                                        					   
                <jdoc:include type="modules" name="position-1" />                                            	                               					
            </div>  				
        </div>
		
		<?php $menu = JSite::getMenu(); ?>
		<?php $lang = JFactory::getLanguage(); ?>
		<?php if ($menu->getActive() == $menu->getDefault($lang->getTag())) { ?>
		<?php if ($this->params->get( 'slidedisable' )) : ?>   <?php include "slideshow.php"; ?><?php endif; ?>
		<?php } ?>	
		
		<div id="main<?php echo $width ?>">				                        
			<jdoc:include type="component" />				
		</div>
			
		<?php if ($this->countModules('position-5') ||  $this->countModules('position-7')) { ?>			           
			<div id="colonne">
				<div id="newsflash">						
					<jdoc:include type="modules" name="position-5" style="xhtml" />						       
				</div>						        
				<div id="right">						           
					<jdoc:include type="modules" name="position-7" style="xhtml" />						        
				</div>						        			       
			</div>				        					
		<?php } ?>
		
		<?php if ($this->countModules('position5')) { ?>			           
			<div id="colonne">
				<div id="newsflash">						
					<jdoc:include type="modules" name="position5" style="xhtml" />						       
				</div>				
			</div>				        					
		<?php } ?>
	</div>
	
	<?php if (	$this->countModules('position-3') || 
				$this->countModules('position-4') || 
				$this->countModules('position-6') || 
				$this->countModules('position-8')) { ?>
		<div id="ftb">
			<div class="pagewidth">
				<div id="wrapper-box">
					<div class="box">
						<jdoc:include type="modules" name="position-3" style="xhtml" />
					</div>
					<div class="box">
						<jdoc:include type="modules" name="position-4" style="xhtml" />
					</div>
					<div class="box">
						<jdoc:include type="modules" name="position-6" style="xhtml" />
					</div>
					<div class="box">
						<jdoc:include type="modules" name="position-8" style="xhtml" />
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	
	<div id="ft">
		<div class="pagewidth">
			<div class="ftb-c">						
				<?php echo "@".date('Y'); ?>&nbsp; <?php echo $csite_name; ?>
			</div>
		</div>	
	</div>
	
</div>

</body>
</html>