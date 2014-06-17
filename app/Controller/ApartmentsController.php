<?php
App::uses('AppController', 'Controller');
/**
 * Apartments Controller
 *
 * @property Apartment $Apartment
 * @property PaginatorComponent $Paginator
 */
class ApartmentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler'); 


	public function availability(){
		$isAvailability = true;
		$apartments = $this->Apartment->find('all');

		$this->set(compact('apartments', 'isAvailability'));
	}


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Apartment->recursive = 0;
		$this->set('apartments', $this->Paginator->paginate());
	}

	// public function dwnld($id=null){

	// 	$this->response->download('/files/floorplans/2E_06-16.pdf');
	// }

	public function dwnld($id) {
	    $a = $this->Apartment->findById($id);
	    if($a){
	    	$path = 'files/floorplans/';
	    	$this->response->file($path.$a['Apartment']['floorplan'],
		    	array('download' => true, 'name' => $a['Apartment']['floorplan'])
		    );
		    // Return response object to prevent controller from trying to render
		    // a view
		    return $this->response;	
	    }
	    
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Apartment->exists($id)) {
			throw new NotFoundException(__('Invalid apartment'));
		}
		$options = array('conditions' => array('Apartment.' . $this->Apartment->primaryKey => $id));
		$this->set('apartment', $this->Apartment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Apartment->create();
			if ($this->Apartment->save($this->request->data)) {
				$this->Session->setFlash(__('The apartment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The apartment could not be saved. Please, try again.'));
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
		if (!$this->Apartment->exists($id)) {
			throw new NotFoundException(__('Invalid apartment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Apartment->save($this->request->data)) {
				$this->Session->setFlash(__('The apartment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The apartment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Apartment.' . $this->Apartment->primaryKey => $id));
			$this->request->data = $this->Apartment->find('first', $options);
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
		$this->Apartment->id = $id;
		if (!$this->Apartment->exists()) {
			throw new NotFoundException(__('Invalid apartment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Apartment->delete()) {
			$this->Session->setFlash(__('The apartment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The apartment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
