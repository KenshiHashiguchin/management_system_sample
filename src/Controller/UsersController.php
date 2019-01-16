<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		// ユーザーの登録とログアウトを許可します。
		// allow のリストに "login" アクションを追加しないでください。
		// そうすると AuthComponent の正常な機能に問題が発生します。
//		$this->Auth->allow(['index', 'add', 'logout']);
	}

	public function index()
	{
		$users = $this->paginate($this->Users->find());
		$this->set('users', $users);
	}

	public function add()
	{
		$user = $this->Users->newEntity();
		if ($this->request->is('post')) {
			// 3.4.0 より前は $this->request->data() が使われました。
			$user = $this->Users->patchEntity($user, $this->request->getData());
			$this->log($user, 'info');
			if ($this->Users->save($user)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(['action' => 'add']);
			}
			$this->Flash->error(__('Unable to add the user.'));
		}
		$this->set('user', $user);
	}


	public function login()
	{
		$this->viewBuilder()->setLayout(false);
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error(__('Invalid username or password, try again'));
		}
	}

	public function logout()
	{
		return $this->redirect($this->Auth->logout());
	}
}
