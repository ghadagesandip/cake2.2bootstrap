<?php


App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Group $Group
 * @property Department $Department
 * @property CorrectiveAction $CorrectiveAction
 */
class User extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */

   
    public $virtualFields = array(
       'name' => 'CONCAT(User.first_name, " ", User.last_name)'
    );


	public $validate = array(
      'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Please select user group ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'department_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Please select department ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		        
		'username' => array(
		    'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter usernaeme.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
				
			),
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				'message' => 'Only characters and numbers are allowed.',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				'on' => 'create' // Limit validation to 'create' or 'update' operations
			),
            'between'=>array(
                     'rule'=>array('between',5,25),
                     'message'=>'between 5 to 25 characters',
                     'on' => 'create'
                     
            ),
            'isUnique'=>array(
                       'rule'=>array('isUnique'),
                       'message'=>'username is already taken',
                       
            
            )

		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter password.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				
			),
            'minLength'=>array(
                         'rule'=>array('minLength',8),
                         'message'=>'please enter atleast 8 characters.'
                         
              )
                       

		),

        'confirm_password' => array(
				'notempty' => array(
					'rule' => array('notempty'),
					'message' => 'Please enter confirm-password.',
					//'allowEmpty' => false,
					//'required' => false,
					//'last' => false, // Stop validation after this rule
					
				),
	            'confirmPassword'=>array(
	                         'rule'=>array('confirmPassword','password'),
	                         'message'=>'password and confirm-password fields are not same.'
                         
	              )


		),

       'first_name' => array(
			'rule' => '/^[a-z]{2,}$/i',
			'message' => 'first name should atleast 3 characters long',			
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
		      //),
		),
		'middle_name' => array(
			'rule' => '/^[a-z]{2,}$/i',
			'message' => 'middle name should atleast 3 characters long',		
			'allowEmpty' => true,
		),
		'last_name' => array(
			'rule' => '/^[a-z]{2,}$/i',
			'message' => 'last name should atleast 3 characters long',		
		),
       
	   'appraisal_doc'=>array(
                 'rule'=>array('extension', array('pdf','txt','doc','docx')),
                 'message'=>'please upload valid appraisal document file. (pdf,txt,doc,docx)',
                 'allowEmpty' => true,
        ),
           
       'profile_image'=>array(
                 'rule'=>array('extension', array('gif','jpeg','png','jpg')),
                 'message'=>'please upload valid image file',
                 'allowEmpty' => true,
        ),
       'signature_image'=>array(
                 'rule'=>array('extension', array('gif','jpeg','png','jpg')),
                 'message'=>'please upload valid image file',
                 'on' => 'create',
                 'allowEmpty' => true,
        ),       
        
		'date_of_birth' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'please enter date of birth',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'gender' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'please select gender.',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

        'email_address'=>array(
               'notempty' => array(
						'rule' => array('notempty'),
						'message' => 'please enter email address.', 
                ),
               'email'=>array(
                     'rule'=>'email',
                     'message'=>'enter enter valid email address.'
                 )
         ),
         
        'address'=>array(
               'notempty' => array(
						'rule' => array('notempty'),
						'message' => 'please enter email address.', 
                )
         )
		
		
		
	);



	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Department'=>array(
		      'className'=>'Department',
		      'foreignKey'=>'department_id',
		      'conditions'=>''
		      
		)

	);

	
	
/**
 * hasMany associations
 *
 * @var array
 */
	
	
	  public function confirmPassword() {
               if($this->data[$this->name][ 'confirm_password' ] !== $this->data[$this->name]['password']) {
                    return FALSE;
                } else {
                    return true;;
                }
       }

      public function beforeSave() {
          
            if (isset($this->data[$this->alias]['password'])) {
                  $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
            }
            return true;
     }



}
