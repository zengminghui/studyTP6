<?php


namespace app\index\controller;
use app\BaseController;
use app\index\model\User;
class ModelTest extends BaseController
{
    //模型对象
    public function demo1(User $user)
    {
//        $res = User::select();
//        dump($res);
        $res = $user->select();
        foreach ($res as $list)
        {
           if($list['user_id'] == 2)
           {
               dump($list['name']);
           }
        }
    }

    public function db(User $user)
    {
        dump($user->db()->find(1));
    }
}