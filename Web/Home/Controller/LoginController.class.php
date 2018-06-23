<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
    	$user=M('user');
    	if(!isset($_POST['name'])&&!isset($_POST['$password'])){
    		$this->display();
    		return;
    	}
    	$name = $_POST['name'];
    	$password = $_POST['password'];
    	$aa = $user->field()->select();
    	$code = 200;
    	for($i = 0;$i<sizeof($aa);$i++){
    		if($aa[$i]['name']==$name&&$aa[$i]['password']==$password){
    			$_SESSION['user']['name'] = $name;
    			$_SESSION['user']['password'] = $password;
    			$code = 200;
    			$this->success($code,U('Index/index'));
    			return;
    		}else{
    			$code = 999;
    		}
    	}
    	$this->error($code,U('Login/login'));
    }
    public function register(){
    	$user=M('user');
    	if(!isset($_POST['name'])&&!isset($_POST['$password'])){
    		$this->display();
    		return;
    	}
    	$data['name'] = $_POST['name'];
		$data['password'] = $_POST['password'];
    	$aa = $user->field()->select();
    	$code = 0;
    	for($i = 0;$i<sizeof($aa);$i++){
    		if($aa[$i]['name']!=$data['name']){
    			$code = $code + 1;
    		}
    	}
    	if($code==sizeof($aa)){
    		$code=200;
    		$user->data($data)->add();
    		$this->success($code,U('Index/index'));
    		return;
    	}
    	$code=999;
    	$this->error($code,U('Login/login'));
    }
    public function logout(){
        session(null);
        $this->success('退出成功！跳转中...',U('Login/login'));
    }
}