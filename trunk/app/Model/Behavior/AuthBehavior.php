<?php

/**
 * 自定义模型行为
 * 
 * @package       Cake.Model.Behavior
 * */
class AuthBehavior extends ModelBehavior {

	/** 验证信息 */
	public $error = array(
		'notEmpty'			=> '%s不能为空',
		'email'				=> '邮箱格式不正确',
		'phone'				=> '电话格式不正确',
		'equalTo'			=> '%s和%s不一致',
		'minLength'			=> '%s的长度不能低于%d',
		'maxLength'			=> '%s的长度不能超过%d',
		'between'			=> '%s的输入长度为%d~%d',
		'isUnique'			=> '%s已经存在',
		'priceNumber'		=> '%s价格格式不正确',
		'myDate'			=> '%s日期格式不正确',
		'IsExist'			=> '%s不存在',
		'positiveNumber'	=> '%s数量格式不正确',
		'checkStock'		=> '产品库存不足',
	);

	/**
	 * afterValidate 验证数据后对[错误]信息的追加
	 *
	 * @param  Model
	 * @return array $errors
	 */    
	public function afterValidate(Model $model) {
		$errors = $model->validationErrors;
		foreach ($errors as $key => $val) {
			foreach ($val as $v) {
				if (array_key_exists($v, $this->error)) {
					if (!empty($model->validate[$key][$v]['replace'])) {
						$params = $model->validate[$key][$v]['replace'];
						$errors[$key] = vsprintf($this->error[$v], $params);
					} else {
						$errors[$key] = $this->error[$v];
					}
				}
			}
		}
		$model->validationErrors = $errors;
		return $errors;
	}
}