<?php
App::uses('AppController', 'Controller');
/**
 * Branches Controller
 *
 * @property Branch $Branch
 */
class BranchesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		$this->Branch->recursive = 0;
		$this->set('branches', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		if (!$this->Branch->exists($id)) {
			throw new NotFoundException(__('Invalid branch'));
		}
		$options = array('conditions' => array('Branch.' . $this->Branch->primaryKey => $id));
		$this->set('branch', $this->Branch->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		if ($this->request->is('post')) {
			$this->Branch->create();
			if ($this->Branch->save($this->request->data)) {
				$this->Session->setFlash(__('The branch has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The branch could not be saved. Please, try again.'));
			}
		}
		$companies = $this->Branch->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		
		if (!$this->Branch->exists($id)) {
			throw new NotFoundException(__('Invalid branch'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Branch->save($this->request->data)) {
				$this->Session->setFlash(__('The branch has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The branch could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Branch.' . $this->Branch->primaryKey => $id));
			$this->request->data = $this->Branch->find('first', $options);
		}
		$companies = $this->Branch->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		
		$this->Branch->id = $id;
		if (!$this->Branch->exists()) {
			throw new NotFoundException(__('Invalid branch'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Branch->delete()) {
			$this->Session->setFlash(__('Branch deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Branch was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function select(){
		$menu = array('menu' => array(
<<<<<<< HEAD
    'id' => '','inferior'=>'','superior'=>'','color'=>''));
=======
    'id' => 'beneficios','inferior'=>'','superior'=>'','color'=>''));
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
		//menu
		$this->Session->write($menu);
		////////
		$Branch = $this->Branch->find('all');
		$this->loadModel('Supermarket');
		$Supermarket = $this->Supermarket->find('all');	
		$this->set(compact('Branch','Supermarket'));
	}
	public function select1($id=null){
<<<<<<< HEAD
		$this->loadModel('NewRequirement');
=======
>>>>>>> b6abcb8f17127e7992c4b9391ac8f4dc08532886
			$menu = array('menu' => array(
    'id' => 'beneficios','inferior'=>'','superior'=>'','color'=>''
));
		//menu
		$this->Session->write($menu);
		//////////////

		if (!$this->Branch->exists($id)) {
			$this->redirect(array('action' => 'select'));
			//throw new NotFoundException(__('Invalid branch'));
		}else{
		$this->loadModel('Supermarket');
		$Supermarket = $this->Supermarket->find('all');		
		$Branch = $this->Branch->find('all',array('conditions' => array('Branch.' . $this->Branch->primaryKey => $id),'recursive'  => 1));
		$this->set(compact('Branch','Supermarket'));
		}
	}
}