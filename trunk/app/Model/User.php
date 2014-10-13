<?php

/**
 * 用户模型
 *
 * @package       app.Model
 */
class User extends AppModel {

    /** 要连的表 */
    public $hasOne = array(
        'Userinfo' => array(
            'className' => 'Userinfo',
            'conditions' => array(
                'User.logid = Userinfo.logid'
            ),
            'foreignKey' => false
        )
    );
}
