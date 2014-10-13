<?php
App::uses('FrontAppController', 'Controller');

/**
 * 会员信息控制器
 *
 * @package		app.Controller
 */
class UserinfosController extends FrontAppController {

    public function index() {
        $this->title = '会员主页';
    }
}