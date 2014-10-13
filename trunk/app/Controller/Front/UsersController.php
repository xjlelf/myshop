<?php
App::uses('FrontAppController', 'Controller');

/**
 * 会员控制器
 *
 * @package		app.Controller
 */
class UsersController extends FrontAppController {

    /** 引用的模型 */
    public $uses = array(
        'User',
        'Userinfo'
    );

    /** 允许未登录的方法 */
    public $authallow = array(
        'register',
        'toRegister',
        'toLogin'
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

    /**
     * 登录验证
     */
    public function toLogin() {
        // 如果已登录直接跳转
        if ($this->Auth->user()) {
            $this->redirect(array(
                'controller' => 'Userinfos',
                'action' => 'index'
            ));
        }
        //判断是否是表单提交和表单是否有数据
        if ($this->request->is('post') && !empty($this->request->data)) {
            if ($this->Auth->login()) {
                $this->User->updateAll(
                    array('User.last_login' => "'".date('Y-m-d H:i:s')."'"),
                    array('User.id' => $this->Auth->user('id'))
                );
                $this->redirect(array(
                    'controller' => 'Userinfos',
                    'action' => 'index'
                ));
            } else {
                $this->set('errorMessage', ConstDefine::ERROR_LOGIN);
                $this->render('login');
            }
        }
    }

    /**
     * 退出登录
     */
    public function logout() {
        $this->redirect($this->Auth->logout());
    }
}