<?php
namespace app\index\controller;

use app\BaseController;
use think\facade\Db;
use think\facade\View;
use think\Request;
use think\facade\Session;

class Test
{
    public function index()
    {
        dump(Db::query('SELECT * FROM tp6_user'));
        //return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) 2020新春快乐</h1><p> ThinkPHP V' . \think\facade\App::version() . '<br/><span style="font-size:30px;">14载初心不改 - 你值得信赖的PHP框架</span></p><span style="font-size:25px;">[ V6.0 版本由 <a href="https://www.yisu.com/" target="yisu">亿速云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ee9b1aa918103c4fc"></think>';
    }

    public function hello2($name = 'ThinkPHP6')
    {
        echo 1;

    }

    //原生读操作 query();
    public function demo1()
    {
        $sql = 'SELECT `user_id`,`name`,`age` FROM `tp6_user` WHERE age<:age LIMIT :num';
        $param = ['age' => 25, 'num' => 2];
        $res = Db::query($sql, $param);
        dump($res);
    }

    //原生写操作 insert/update/delete execute()
    public function demo2()
    {
        $sql = 'UPDATE `tp6_user` SET `age`=:age WHERE `user_id`=:id ';
        $param = ['age' => 23, 'id' => 1];
        $res = Db::execute($sql, $param);
        dump($res);
    }

    public function demo3(Request $request)
    {
        dump($request->session());
        echo PUBLIC__STATIC;
        return View::fetch();
    }

    public function testlayout()
    {
        View::assign(['name'=>'TP6','type'=>'learn']);
        return View::fetch();
    }
    public function demo4(Request $request,Session $Session)
    {
       var_dump($Session::all());
        if(!captcha_check($request->param('code'))){
            // 验证失败
            echo '1';
           }else{
            echo 2;
           };
    }
}
