<?php
App::uses('AdminAppController', 'Controller');

/**
 * 欢迎控制器
 *
 * @package		app.Controller
 */
class WelcomeController extends AdminAppController {

    /**
     * 欢迎
     */
    public function admin_index() {
	}

    public function admin_login() {
        $this->layout = 'admin_login';
    }
}