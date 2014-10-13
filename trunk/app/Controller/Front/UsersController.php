<?php
App::uses('FrontAppController', 'Controller');

/**
 * 会员控制器
 *
 * @package		app.Controller
 */
class UsersController extends FrontAppController {

    public $uses = array(
        'User',
        'Userinfo'
    );

    /**
     * 登录页面
     */
    public function login() {
        $this->title = '会员登录';
    }

    /**
     * 注册页面
     */
    public function register() {
        $this->title = '会员注册';
    }

    /**
     * 注册验证
     */
    public function toRegister() {
        if ($this->Userinfo->addNewUser($this->data)) {
            $this->redirect(array(
                'controller' => 'Userinfos',
                'action' => 'index'
            ));
        } else {
            $this->render('register');
        }
    }
}