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
     * 控制器结束后执行
     * */
    public function beforeRender() {
        $this->set('title', $this->title);
    }
}
