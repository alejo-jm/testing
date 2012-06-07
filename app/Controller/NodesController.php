<?php
App::uses('AppController', 'Controller');
/**
 * Nodes Controller
 *
 * @property Node $Node
 */
class NodesController extends AppController {
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Node->recursive = 0;
		$this->set('nodes', $this->paginate());
	}

	public function plaste(){
		echo 'some big json';
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Node->id = $id;
		if (!$this->Node->exists()) {
			throw new NotFoundException(__('Invalid node'));
		}
		$this->set('node', $this->Node->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Node->create();
			if ($this->Node->save($this->request->data)) {
				$this->Session->setFlash(__('The node has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The node could not be saved. Please, try again.'));
			}
		}
		$users = $this->Node->User->find('list');
		$parentNodes = $this->Node->ParentNode->find('list');
		$nodeTypes = $this->Node->NodeType->find('list');
		$this->set(compact('users', 'parentNodes', 'nodeTypes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Node->id = $id;
		if (!$this->Node->exists()) {
			throw new NotFoundException(__('Invalid node'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Node->save($this->request->data)) {
				$this->Session->setFlash(__('The node has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The node could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Node->read(null, $id);
		}
		$users = $this->Node->User->find('list');
		$parentNodes = $this->Node->ParentNode->find('list');
		$nodeTypes = $this->Node->NodeType->find('list');
		$this->set(compact('users', 'parentNodes', 'nodeTypes'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Node->id = $id;
		if (!$this->Node->exists()) {
			throw new NotFoundException(__('Invalid node'));
		}
		if ($this->Node->delete()) {
			$this->Session->setFlash(__('Node deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Node was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Node->recursive = 0;
		$this->set('nodes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Node->id = $id;
		if (!$this->Node->exists()) {
			throw new NotFoundException(__('Invalid node'));
		}
		$this->set('node', $this->Node->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Node->create();
			if ($this->Node->save($this->request->data)) {
				$this->Session->setFlash(__('The node has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The node could not be saved. Please, try again.'));
			}
		}
		$users = $this->Node->User->find('list');
		$parentNodes = $this->Node->ParentNode->find('list');
		$nodeTypes = $this->Node->NodeType->find('list');
		$this->set(compact('users', 'parentNodes', 'nodeTypes'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Node->id = $id;
		if (!$this->Node->exists()) {
			throw new NotFoundException(__('Invalid node'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Node->save($this->request->data)) {
				$this->Session->setFlash(__('The node has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The node could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Node->read(null, $id);
		}
		$users = $this->Node->User->find('list');
		$parentNodes = $this->Node->ParentNode->find('list');
		$nodeTypes = $this->Node->NodeType->find('list');
		$this->set(compact('users', 'parentNodes', 'nodeTypes'));
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Node->id = $id;
		if (!$this->Node->exists()) {
			throw new NotFoundException(__('Invalid node'));
		}
		if ($this->Node->delete()) {
			$this->Session->setFlash(__('Node deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Node was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
