<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\T1;

class TestController extends Controller
{
    //声明去掉当前控制器加载视图的头部底部公共部分，否则yii2会自动加载
    public $layout = false;

    public function actionIndex()
    {
        //echo 666;
        //die;
        //加载veiws目录下的test目录下的index.php文件
        return $this->render('index', [
            'username' => '苍苍',
            'order' => [
                'a' => '啪啪啪',
                'b' => '哒哒哒'
            ],
        ]); 
    }

    public function actionAdd()
    {
        #步骤1：查询所有：
        $t1s = T1::find()->all();
        #步骤2：遍历输出
        foreach ($t1s as $t1) {
            echo $t1->id . '__' . $t1->uname . '<br />';
        }
        echo '<pre>';
        print_r($t1s);
        die;
    }

    public function actionOne()
    {
        $t1 = T1::findOne(1);
        echo '<pre>';
        print_r($t1);

    }
}