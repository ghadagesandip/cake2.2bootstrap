
 <div class="hero-unit">
       
		<?php echo $this->Form->create('User'); ?>
		    <fieldset>
		        <legend><?php echo __('Login here'); ?></legend>
		        
		        <?php
		         echo $this->Form->input('username'); 
		         
		         echo $this->Form->input('password');
		    
		         echo $this->Session->flash();
		         
     		     echo $this->Html->link('Register here',array('action'=>'register'));    
		    ?>
		    
		    </fieldset>
		 <br/>
		<?php 
		 $options = array(
    			'label' => 'Sign in',
   				'class' => 'btn btn-success',
   				);
   				
			echo $this->Form->end($options);
    	 ?>
    	 
  


</div>
 

   