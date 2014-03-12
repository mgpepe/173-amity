<?php
App::uses('AppController', 'Controller');
/**
 * ContactForms Controller
 *
 * @property ContactForm $ContactForm
 * @property PaginatorComponent $Paginator
 */
class ContactFormsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session');

/**
 * index method
 *
 * @return void
 */
	public function showme() {
		$this->ContactForm->recursive = 0;
		$this->set('contactForms', $this->Paginator->paginate());
		$this->set('page', '');
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContactForm->exists($id)) {
			throw new NotFoundException(__('Invalid contact form'));
		}
		$options = array('conditions' => array('ContactForm.' . $this->ContactForm->primaryKey => $id));
		$this->set('contactForm', $this->ContactForm->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$hide_form = false;
		if ($this->request->is('post')) {
			$this->ContactForm->create();
			if ($this->ContactForm->save($this->request->data)) {
				// $this->Session->setFlash(__('The contact form has been saved.'));
				// return $this->redirect(array('action' => 'add'));
				$hide_form = true;
			} else {
				$this->Session->setFlash(__('The contact form could not be saved. Please, try again.'));
			}
		}
		$this->set('hide_form', $hide_form);
		$this->set('page', 'contact_us');
		$this->set('title_for_layout', 'Contact Us');
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ContactForm->exists($id)) {
			throw new NotFoundException(__('Invalid contact form'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContactForm->save($this->request->data)) {
				$this->Session->setFlash(__('The contact form has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact form could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContactForm.' . $this->ContactForm->primaryKey => $id));
			$this->request->data = $this->ContactForm->find('first', $options);
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
		$this->ContactForm->id = $id;
		if (!$this->ContactForm->exists()) {
			throw new NotFoundException(__('Invalid contact form'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ContactForm->delete()) {
			$this->Session->setFlash(__('The contact form has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contact form could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ContactForm->recursive = 0;
		$this->set('contactForms', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ContactForm->exists($id)) {
			throw new NotFoundException(__('Invalid contact form'));
		}
		$options = array('conditions' => array('ContactForm.' . $this->ContactForm->primaryKey => $id));
		$this->set('contactForm', $this->ContactForm->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ContactForm->create();
			if ($this->ContactForm->save($this->request->data)) {
				$this->Session->setFlash(__('The contact form has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact form could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ContactForm->exists($id)) {
			throw new NotFoundException(__('Invalid contact form'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContactForm->save($this->request->data)) {
				$this->Session->setFlash(__('The contact form has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact form could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContactForm.' . $this->ContactForm->primaryKey => $id));
			$this->request->data = $this->ContactForm->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ContactForm->id = $id;
		if (!$this->ContactForm->exists()) {
			throw new NotFoundException(__('Invalid contact form'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ContactForm->delete()) {
			$this->Session->setFlash(__('The contact form has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contact form could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
