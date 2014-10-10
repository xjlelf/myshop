<?php
App::uses('FrontAppController', 'Controller');

/**
 * 会员控制器
 *
 * @package		app.Controller
 */
class UsersController extends FrontAppController {

    public function login() {
        $this->title = '会员登录';
    }

    public function register() {
        $this->title = '会员注册';
    }
}