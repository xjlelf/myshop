<?php
App::uses('FrontAppController', 'Controller');

/**
 * 商品展示控制器
 *
 * @package		app.Controller
 */
class ShopController extends FrontAppController {

    /** 允许未登录的方法 */
    public $authallow = array(
        'index'
    );

    /**
     * 主页
     */
    public function index() {
        $this->title = '电商主页';
        $this->set('is_main', true);
    }
}
