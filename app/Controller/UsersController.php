<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
<<<<<<< HEAD
public $helpers = array('Js','Session');
=======

>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
/**
 * index method
 *
 * @return void
 */


public function beforeFilter() {

    parent::beforeFilter();//lo q puede hacer cualquier usuario sin login
    //$this->Auth->allow('add'); // / / Dejar que los usuarios se registran 
    $this->Auth->autorediRect=false;
	}

	public function login() {
<<<<<<< HEAD
		$menu = array('menu' => array(
    'id' => '','inferior'=>'','superior'=>'','color'=>''
));

		//menu
		$this->Session->write($menu);
		//////////////
=======
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
		//carrusel1
	//lo q hace cuando se loguea o cuando quiere loguearce 
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());
	        } else {
	            $this->Session->setFlash(__('Invalid username or password, try again'));
	        }
	    }
	}

	public function logout() { //sierra sesion 
<<<<<<< HEAD
		$menu = array('menu' => array(
    'id' => '','inferior'=>'','superior'=>'','color'=>''
));

		//menu
		$this->Session->write($menu);
		//////////////
=======
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
	//	carrusel1
	    $this->redirect($this->Auth->logout());
	}



















	public function index2() {
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
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
		if (!$this->User->exists($id)) {
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
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}