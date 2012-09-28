<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>

		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<?php
		echo $this->Html->meta('icon');
                echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
        
		echo $this->Html->css(array('bootstrap','bootstrap-responsive'));
		echo $this->Html->script(array('jquery','jquery.validate','bootstrap.min','bootstrap-dropdown','bootstrap-tooltip'));
	?>
</head>

<body>
	  
     <div class="container-fluid">
	  
		   <div class="row-fluid">
		   
		    	    <?php echo $this->element('header_nav');?>
     
                    </div>
    </div>
    

    <div style="padding-top:60px;" class="container-fluid">
	  
	   <div class="row-fluid">
	  	<!--Body content-->
                 <div class="span10 offset2" style="text-align:center;">
 		   <?php echo $this->Session->flash(); ?>
                 </div>
           </div>
           <div class="row-fluid">
                	<?php echo $this->fetch('content'); ?>
           </div>
 </div>	   

 <?php  echo $this->Js->writeBuffer(); ?>
    
</body>
</html>
