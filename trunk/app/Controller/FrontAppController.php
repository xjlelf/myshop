<?php

/**
 * 前台控制器
 *
 * @package		app.Controller
 */
class FrontAppController extends AppController {

    /** 默认布局 */
    public $layout = 'front';

    /** 默认标题 */
    public $title = '我的电商';

    /**
     * 控制器执行前执行
     */
    public function beforeFilter() {
        // 验证管理员的登录情况
        $this->__authFront();
        if ($this->Auth->user()) {
            $this->set('user', $this->Auth->user());
        }
    }

    /**
     * 控制器结束后执行
     * */
    public function beforeRender() {
        $this->set('title', $this->title);
    }

    /**
     * 验证会员登录情况
     * */
    private function __authFront() {
        // 是否有Auth组件
        if (!isset($this->Auth)) { return false; }
        // 允许不登录的action
        if(!empty($this->authallow)){
            $this->Auth->allow($this->authallow);
        }
        // 设置session名称
        AuthComponent::$sessionKey = 'Auth.Userinfo';
        // 设置管理员表的信息
        $this->Auth->authenticate = array('Form' => array(
            'fields' => array(
                'username' => 'logid',
                'password' => 'pwd'
            ),
            'userModel' => 'User'
        ));
        // 设置登录方法
        $this->Auth->loginAction = array('controller' => 'Users', 'action' => 'login');
        // 取消登录成功之后自动跳转
        $this->Auth->autoRedirect  = false;
        $this->Auth->logoutRedirect= array('controller' => 'Users', 'action' => 'login');
    }
}
