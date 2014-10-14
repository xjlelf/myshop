<?php
App::uses('AdminAppController', 'Controller');

/**
 * 管理员控制器
 * */
class ManagersController extends AdminAppController {

    /** 允许未登录的方法 */
    public $authallow = array(
        'admin_isLogin',
        'admin_login'
    );

    /**
     * 管理员是否登录
     * */
    public function admin_isLogin() {
        if ($this->Auth->user()) {
            $data = array(
                'success' => true,
                'data' => $this->Auth->user(),
            );
        } else {
            $data = array('success' => false);
        }
        $this->set('data', $data);
    }

    /**
     * 管理员登录
     * */
    public function admin_login() {
        // 如果已登录直接跳转
        if ($this->Auth->user()) {
            $this->redirect(array(
                'controller' => 'Welcome',
                'action' => 'index'
            ));
        }
        //判断是否是表单提交和表单是否有数据
        if ($this->request->is('post') && !empty($this->request->data)) {
            if ($this->Auth->login()) {
                $this->redirect(array(
                    'controller' => 'Welcome',
                    'action' => 'index'
                ));
            } else {
                $this->render('Welcome/admin_login');
            }
        }
    }

    /**
     * 管理员退出登录
     * */
    public function admin_logout() {
        $this->redirect($this->Auth->logout());
    }
}