<div class="users form">
<?php echo  $this->Form->create('User',array('type'=>'file','autocomplete'=>'off'));?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('group_id',array('default'=>'3'));
		echo $this->Form->input('department_id',array('empty'=>'Choose One'));
		echo $this->Form->input('username',array('placeholder'=>'minimum 5 characters'));
		echo $this->Form->input('password',array('placeholder'=>'minimum 8 characters'));
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('profile_image',array('type'=>'file'));
		
		echo $this->Form->input('signature_image',array('type'=>'file'));
		
		echo $this->Form->input('date_of_birth',array(                                                       
                                               'minYear'=>date('Y')-70,
                                               'maxYear'=>date('Y')-15,
                                               'empty'=>''
                                              ));
                                              
        $options = array('Male' => 'Male', 'Female' => 'Female');
        $attributes = array('legend' => false);
        echo $this->Form->radio('gender', $options, $attributes);                                      
		
		echo $this->Form->input('email_address');
		echo $this->Form->input('contact_number');
		echo $this->Form->input('fax',array('type'=>'number'));
		echo $this->Form->input('telephone_no');
		echo $this->Form->input('address');
	?>
		    
	<script type="text/javascript" src ="jquery-1.7.2.js"></script>
	<script type="text/javascript"	src="http://maps.google.com/maps/api/js?sensor=true"></script>
		
	<script type="text/javascript">
		$(document).ready(function(){
		    initialize(0, 0);
		    // value of latitude or longitude change by user
		    $(".latlang").bind('change', function(){
		       if(numberRegex.test($(".latitude").val()) && numberRegex.test($(".longitude").val()))
		       {
		          initialize($(".latitude").val(), $(".longitude").val());
		       }
		       else
		       {
		       	alert("Please enter numeric value");
		       	$(this).val(0);
		       }
		    });
		    
		    // value of address change by user
		    $("#UserAddress").bind('change', function(){
		    	var address = $(this).val();
		        geocoder.geocode( { 'address': address}, function(results, status) {
		        if (status == google.maps.GeocoderStatus.OK)
		        {
		           initialize(results[0].geometry.location.lat(),results[0].geometry.location.lng());
		           
		        }
		       });
		    });
		}).unload(function(){
		   GUnload();
		   })
		
		var geocoder = new google.maps.Geocoder();
		var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
		
		
		function geocodePosition(pos) {
		geocoder.geocode({
		latLng: pos
		}, function(responses) {
		if (responses && responses.length > 0) {
		  updateMarkerAddress(responses[0].formatted_address);
		} 
		});
		}
		
		function updateMarkerPosition(latLng) {
		$(".latitude").val((latLng.lat()).toFixed(7));
		$(".longitude").val((latLng.lng()).toFixed(7));
		}
		
		function updateMarkerAddress(str) {
		$(".location_submission").val(str);
		$(".location_submission").html(str);
		}
		
		function initialize(latitude, longitude) {
		var latLng = new google.maps.LatLng(latitude, longitude);
		var map = new google.maps.Map(document.getElementById('map_canvas'), {
		zoom: 15,
		center: latLng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		
		
		var marker = new google.maps.Marker({
		position: latLng,
		map: map,
		draggable: true
		});
		
		// Update current position info.
		updateMarkerPosition(latLng);
		geocodePosition(latLng);
		
		google.maps.event.addListener(marker, 'drag', function() {
		updateMarkerPosition(marker.getPosition());
		});
		
		google.maps.event.addListener(marker, 'dragend', function() {
		geocodePosition(marker.getPosition());
		
		});
		
		}
		
	</script>

	<div id="map_canvas" style="width: 350px; height: 250px; float:left;">
	</div>
	<div class="info_map" style="float:left; width: 350px; height: 250px;">
	     <table border="0" cellspacing="0" cellpadding="0" class="loc_map">
	     	<tr>
	     		
	     		<td>
	     		 
	     		 <?php 
	     		     echo $this->Form->input('latitude',array(
	     		 							          'class'=>'latlang latitude',
	     		 							          
	     		 							)); 
				 ?>
	     		</td>
	     	</tr>
	     	<tr>
	     		
	     		<td>
	     		  
	     		   <?php 
	     		     echo $this->Form->input('longitude',array(
	     		 							          'class'=>'latlang latitude',
	     		 							          
	     		 							)); 
				 ?>  
	     		</td>
	     
	     		
	     		
	     		  <?php 
	     		    echo $this->Form->input('map_address',array('class'=>'location_submission','label'=>'','type'=>'hidden'));
	     		  ?> 
	  
	     		</td>
	     	</tr>
	     	
	     </table>
	</div>
   <p class="location_submission"></p>

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		
	
		<li><?php echo $this->Html->link(__('List Corrective Actions'), array('controller' => 'corrective_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Corrective Action'), array('controller' => 'corrective_actions', 'action' => 'add')); ?> </li>
	</ul>
</div>
