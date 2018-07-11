<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function showmyinfo(){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $code = ($name=='yzf'&&$password=='123456')?200:999;
        $data['code'] = $code;
        if($code == 200){
            $info['userinfo'] = [
                { key: '学历', val: '大专' },
                { key: '学校', val: '广州大学松田职业学院' }, 
                { key: '专业', val: '计算机应用技术'}, 
                { key: '职位', val: 'Web前端工程师' },
                { key: '邮箱', val: '727617616@qq.com' },
                { key: '爱好', val: '篮球、英雄联盟、听歌、电影' }
            ]
            $info['majorlist'] = [
                { 'name': 'HTML', 'num': 90 },
                { 'name': 'CSS', 'num': 92 },
                { 'name': 'JavaScript', 'num': 85 },
                { 'name': 'jQuery', 'num': 88 },
                { 'name': 'bootstrap', 'num': 83 },
                { 'name': 'mui', 'num': 82 },
                { 'name': 'ajax', 'num': 85 },
                { 'name': 'json', 'num': 80 },
                { 'name': 'twig', 'num': 75 },
                { 'name': 'thinkphp', 'num': 75 },
                { 'name': 'mysql', 'num': 65 },
                { 'name': 'java', 'num': 75 },
                { 'name': 'git', 'num': 70 },
                { 'name': 'Photoshop', 'num': 65 }
            ]
            $info['project'] = [
                {
                    name: '东莞市友才网络科技有限公司官网',
                    textlist: [
                      { name: '时间', val: '2017-09-15~2017-11-03' },
                      { name: '链接', val: 'http://www.yc5158.com' },
                      { name: '内容', val: '基本是自己独立开发前端，配合产品经理和UI完成页面布局,配合后端完成动态数据等' }
                    ]
                },
                {
                    name: '技友App',
                    textlist: [
                        { name: '时间', val: '2017-10-15~至今' },
                        { name: '介绍', val: '友才网络科技有限公司主打产品之一' },
                        { name: '内容', val: '基于H5+和mui框架,使用ajax对接接口数据的交互和页面制作等' }
                    ]
                },
                {
                    name: '技友OA',
                    textlist: [
                        { name: '时间', val: '2018-03-05~至今' },
                        { name: '介绍', val: '友才网络科技有限公司主打产品之一' },
                        { name: '内容', val: '主要负责公共html模块、css组件和js闭包开发等（如图片、文件上传等功能）' },
                        { name: '链接', val: 'http://oa.yc5158.com' }
                    ]
                },
                {
                    name: '东莞市技师学院公众号--人才大厅',
                    textlist: [
                        { name: '时间', val: '2018-04-11~至今' },
                        { name: '介绍', val: '技友OA子功能之一,为东莞技师学院提供求学招生、学生信息管理等功能' },
                        { name: '内容', val: '主要负责页面的制作和数据交互' },
                        { name: '链接', val: 'http://oa.yc5158.com/school/jobfair?cid=63' }
                    ]
                }
            ]
        }else{
            $info = '您没有权限！';
        }
        $data['info'] = $info;
        $this->show('','utf-8');
        $this->ajaxReturn($data,'JSON');
    }
}