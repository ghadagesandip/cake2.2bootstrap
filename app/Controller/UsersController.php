<?php

App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

/**
 * index method
 *
 * @return void
 * 
 */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('register', 'logout');
    }
   
    public function login() {
    	$this->layout='login_layout';
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());
	        } else {
	            $this->Session->setFlash(__('Invalid username or password, try again'));
	        }
	    }
	}

	public function logout() {
	    $this->redirect($this->Auth->logout());
	}


     public $paginate=array(
          //  'limit'=>10,
             'conditions'=>array('User.is_deleted'=>false),
             'order' => array('Group.id'=>'asc', 'User.id'=>'desc')
      );
    
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function register() {
		if ($this->request->is('post')) {
			$this->User->create();
			        
             if(empty($this->request->data['User']['profile_image']['name'])){
                $this->request->data['User']['profile_image']=null;
             }else{
                $this->request->data['User']['profile_image']=$this->_uploadProfileImage();
             }
             
             if(empty($this->request->data['User']['signature_image']['name'])){
                $this->request->data['User']['signature_image']=null;
             }else{
                $this->request->data['User']['signature_image']=$this->_uploadSignatureImage();
             }
             
			if ($this->User->save($this->request->data)) {
				$id = $this->User->id;
		        $this->request->data['User'] = array_merge($this->request->data['User'], array('id' => $id));
		        $this->Auth->login($this->request->data['User']);
		        

				$this->Session->setFlash(__('Congratulations you are registered successfully.'));
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$departments = $this->User->Department->find('list');
		$this->set(compact('groups','departments'));
	}
  
	
	public function _uploadProfileImage(){
		       
		        $path=WWW_ROOT.'uploads/user_profile_images';
             
                       //loads file upload components
                       $this->FileUpload=$this->Components->load('FileUpload');

                       // generate unique file name if same file name already exits in upload dir
                       $unique_file_name=$this->FileUpload->generateUniqueFilename($this->data['User']['profile_image']['name'],$path);
                      
                       if($this->FileUpload->handleFileUpload($this->data['User']['profile_image'],$unique_file_name,$path)){
                           return $unique_file_name;
                       }else{
                           return null;

                       }
                
	}
	
	public function _uploadSignatureImage(){
		       
		        $path=WWW_ROOT.'uploads/user_signature_image';
             
                       //loads file upload components
                       $this->FileUpload=$this->Components->load('FileUpload');

                       // generate unique file name if same file name already exits in upload dir
                       $unique_file_name=$this->FileUpload->generateUniqueFilename($this->data['User']['signature_image']['name'],$path);
                      
                       if($this->FileUpload->handleFileUpload($this->data['User']['signature_image'],$unique_file_name,$path)){
                           return $unique_file_name;
                       }else{
                           return null;

                       }
                
	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$departments = $this->User->Department->find('list');
		$this->set(compact('groups','departments'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->saveField('is_deleted',1)) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
