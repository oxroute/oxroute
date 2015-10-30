<?php
namespace Home\Model;
use Think\Model\RelationModel;
class WriteModel extends RelationModel{
	protected $_validate = array(
		array('questions','require','请选择题型'),
		array('difficulty', 'require', '请选择难度'),
		array('test_people', 'require', '请选择出题人'),
		array('test', 'require', '请填写题干'),
		//array('answer', 'require', '请选择答案'),
		array('analytical', 'require', '请填写解析'),
		//array('source', 'require', '请填写来源'),
		);
}