<?php
/**
 * @name TestController
 * @author win10-805172027\administrator
 * @desc 测试控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class TestController extends Yaf_Controller_Abstract 
{
	public function indexAction() 
	{
		// $t4 = new T4Model();
		// #插入数据
		// $rs = $t4->add('insert into t4 (uname,pwd) values ("aaa", "bbb")');
		// var_dump($rs);
		// die;
		
		// $t1s =  (new T4Model)->get("select * from t4");;
		// #步骤2：遍历输出
		// foreach ($t1s as $t1) {
		//     echo $t1['id'] . '__' . $t1['uname'] . '<br />';
		// }
		// echo '<pre>';
		// print_r($t1s);
		// die;

		$data1 = '张三'; 
		$data2 = [ 'name' => '李四', 'age'  => 18, 'sex'  => '男'];
		$data3 = [
		    [ 'name' => '李四1', 'age'  => 181, 'sex'  => '男1'],
		    [ 'name' => '李四2', 'age'  => 182, 'sex'  => '男2'],
		    [ 'name' => '李四3', 'age'  => 183, 'sex'  => '男3']
		];

		$this->getView()->assign('data1', $data1);
		$this->getView()->assign('data2', $data2);
		$this->getView()->assign('data3', $data3);

		$this->getView()->render('test/index.phtml');

		// return false;
	}

	public function addAction()
	{
		echo 888;
		return false;

	}
}
