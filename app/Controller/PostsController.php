<?php

App::uses('AppController', 'Controller');

 class PostsController extends AppController{

 	public  function index(){
 		$posts=$this->paginate();
 		$this->set('posts',$posts);
 	}
 	
 	
 	public function add(){
 		if($this->request->is('Post')){
 			$this->Post->create();
 			$this->request->data['Post']['user_id']=AuthComponent::user('id');
 			if($this->Post->save($this->request->data)){
 			    $this->Session->setFlash('saved successfully');
                            $this->redirect(array('action'=>'index'));
                        }else{
                            $this->Session->setFlash('could not save,try again');
                        }
 			
 		}else{
 			$receivers=$this->Post->User->find('list',array(
 						'fields'=>array('id','full_name')
 						
 					));
 			$this->set(compact('receivers'));
 		}
 	}
}

?>