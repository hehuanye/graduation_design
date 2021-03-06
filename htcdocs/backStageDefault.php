<?php
/**
 * Created by PhpStorm.
 * User: 75157
 * Date: 2018/3/26
 * Time: 11:03
 */

include_once('../lib/smarty-3.1.30/libs/Smarty.class.php');
include_once ('../Ko/BaseApp.php');

class backStageDefault extends BaseApp{

    function outputHead()
    {
        $smarty =new Smarty();
        $user = isset($_GET['user'])&&!empty($_GET['user'])?$_GET['user']:null;
        $leverPower = isset($_GET['levelPower'])&&!empty($_GET['levelPower'])?$_GET['levelPower']:null;
        $smarty->assign('user',$user);
        if($leverPower==1){
            $smarty->assign('leverPower','管理员');
        }else{
            $smarty->assign('leverPower','用户');
        }
        $smarty->display('../static/common/head.tpl');
    }

    function outputBody()
    {
        $smarty =new Smarty();
        $user = isset($_GET['user'])&&!empty($_GET['user'])?$_GET['user']:null;
        $leverPower = isset($_GET['levelPower'])&&!empty($_GET['levelPower'])?$_GET['levelPower']:null;
        $smarty->assign('user',$user);
        if($leverPower==1){
            $smarty->assign('leverPower','管理员');
        }else{
            $smarty->assign('leverPower','用户');
        }
        $smarty->display('../static/backStage/default.html');
    }

    function outputTail()
    {
        $smarty = new Smarty();
        $smarty->display('../static/common/foot.tpl');
    }
}

$obj = new backStageDefault();
$obj->run();