<?php
App::uses('FrontAppController', 'Controller');

/**
 * 商品展示控制器
 *
 * @package		app.Controller
 */
class ShopController extends FrontAppController {

    public function index() {
        $this->title = '电商主页';
    }
}
