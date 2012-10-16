<?php
App::uses('AppModel', 'Model');

class Post extends AppModel{
	
	public  $name='Post';
	
	public $belongsTo=array(
		'User'=>array(
			'className'=>'User',
			'foreignKey'=>'user_id'
		),
		'Receiver'=>array(
			'className'=>'User',
			'foreignKey'=>'receiver_id'
		)
	);

        public $validate=array(
                'title'=>array(
                       	'rule' => 'alphaNumeric',
			'message' => 'Please enter usernaeme.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
		),
               'message'=>array(
                       	'rule' => 'alphaNumeric',
			'message' => 'Please enter usernaeme.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
		),
                'receiver_id'=>array(
                       	'rule' => 'notEmpty',
			'message' => 'Please enter usernaeme.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
		)


        );
	
}

?>