<?php
	namespace app\admin\controller;
	use think\Controller;

	/**
	 * 
	 */
	class Login extends Controller
	{
		
		public function index(){
			if (request()->isPost()) {
				if (!captcha_check(input('code'))) {
					return json(array('code'=>2,'message'=>'验证码错误'));
				}
				$res = db('admin')->where(array('username'=>input('post.username'),'password'=>md5(input('post.password'))))->find();
				if ($res) {
					session('id',$res['id']);
					session('username',$res['username']);
					session('head_pic',$res['pic']);
					return json(array('code'=>1,'message'=>'登录成功'));
				}else{
					return json(array('code'=>0,'message'=>'用户名或密码错误'));
				}
				return;
			}
			return view();
		}
	}