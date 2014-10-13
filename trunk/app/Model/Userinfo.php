<?php
App::uses('Security', 'Utility');

/**
 * 用户信息模型
 *
 * @package       app.Model
 */
class Userinfo extends AppModel {

    /** 要连的表 */
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'conditions' => array(
                'User.logid = Userinfo.logid'
            ),
            'foreignKey' => false
        )
    );

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
        'confirm_pwd' => array(
            'equalTo' => array(
                'rule' => array('equalTo', 'pwd'),
                'replace' => array('密码', '确认密码'),
                'last'    => true,
            )
        )
    );

    /**
     * 添加新用户
     *
     * @return mixed
     */
    public function addNewUser($postData) {
        $flag = false;
        $this->begin();
        $data['User']['logid'] = $postData['Userinfo']['logid'];
        $data['User']['pwd'] = Security::hash($postData['Userinfo']['pwd'], null, true);
        $this->User->create();
        $this->User->set($data);
        if ($this->User->save()) {
            $this->create();
            $this->set($postData);
            $flag = $this->save();
        }
        if ($flag) {
            $this->commit();
        } else {
            $this->rollback();
        }
        return $flag;
    }
}
