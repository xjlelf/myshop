<?php

/**
 * 用户信息模型
 *
 * @package       app.Model
 */
class Userinfo extends AppModel {

    /** 验证规则 */
    public $validate = array(
        'logid' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'replace' => '用户名',
                'last' => true,
            ),
            'between' => array(
                'rule' => array('between', 4, 16),
                'replace' => array('用户名', 4, 16),
                'last' => true,
            )
        ),
        'email' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'replace' => '邮箱',
                'last' => true,
            )
        ),
        'pwd' => array(
            'notEmpty' => array(
                'rule'    => 'notEmpty',
                'replace' => '密码',
                'last'    => true,
            )
        ),
        'confirm_pwd' => array(
            'equalTo' => array(
                'rule' => array('equalTo', 'pwd'),
                'replace' => array('密码', '确认密码'),
                'last'    => true,
            )
        )
    );

    /**
     * @param array $options
     * @return bool
     */
    public function beforeSave($options = array()) {
        App::uses('Security', 'Utility');
        $this->data['Userinfo']['pwd'] = Security::hash($this->data['Userinfo']['pwd'], null, true);
        return true;
    }
}
