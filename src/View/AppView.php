<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\View;

use Cake\View\View;
use Cake\Routing\Router;

/**
 * Application View
 *
 * Your application’s default view class
 *
 * @link https://book.cakephp.org/3.0/en/views.html#the-app-view
 */
class AppView extends View
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading helpers.
     *
     * e.g. `$this->loadHelper('Html');`
     *
     * @return void
     */
    public function initialize()
    {
		$this->loadHelper('Html');
		$this->loadHelper('Form', ['className' => 'BootstrapUI.Form']);
		$this->loadHelper('Flash', ['className' => 'BootstrapUI.Flash']);
		$this->loadHelper('Paginator', ['className' => 'BootstrapUI.Paginator']);
    }

	public function url($controller, $action, $member = null, $id = null)
	{
		$options = ['controller' => $controller, 'action' => $action];
		if ($member) {
			$options['prefix'] = $member;
		}
		return Router::url(['_scheme' => env('SCHEME'), 'prefix' => $member,
							'controller' => $controller, 'action' => $action, 'id' => $id]);
	}
}
