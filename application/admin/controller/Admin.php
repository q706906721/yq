<?php
	namespace app\admin\controller;

	class Admin extends Common
	{
		public function lst()
		{
			$admins = db('admin')->paginate(10);
			$this->assign('admins',$admins);
			return view();
		}

		public function add()
		{
			if (request()->isPost()) {
				if (empty(input('username'))) {
					$this->error('用户名不可为空');
				}else{
					if (db('admin')->whereUsername(input('username'))->find()) {
						$this->error('该用户已经存在');
					}
				}
				if (empty(input('password'))) {
					$this->error('密码不可为空');
				}
				$userInfo = ['username'=>input('username'),'password'=>md5(input('password')),'pic'=>input('pic')];
				$res = db('admin')->insert($userInfo);
				if($res){
					$this->success('新增成功','lst');
				}else{
					$this->error('新增失败');
				}
			}
			return view();
		}

		public function edit()
		{
			if (request()->isPost()) {
				$userInfo = input();
				if (empty(input('username'))) {
					$this->error('用户名不可为空');
				}else{
					if (db('admin')->whereUsername(input('username'))->where('id','<>',input('id'))->find()) {
						$this->error('该用户已经存在');
					}
				}
				if (empty(input('password'))) {
					$userInfo['password'] = db('admin')->getFieldById(input('id'),'password');
				}else{
					$userInfo['password'] = md5(input('password'));
				}
				$res = db('admin')->update($userInfo);
				if($res){
					$this->success('修改成功','index/index');
				}else{
					$this->error('修改失败');
				}
			}
			if (input('id')) {
				$admin = db('admin')->find(input('id'));
				if (!$admin) {
					$this->error('查无此人');
				}
			}else{
				$this->error('查无此人');
			}
			$this->assign('admin',$admin);
			return view();
		}

		public function del($id)
		{
			$res = db('admin')->delete($id);
			if ($res) {
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}
		}

		public function logout(){
			session(null);
			$this->redirect('login/index');
		}
		
		public function ajUpload (){
			if (request()->isPost()) {
				return $this->upload('file');
			}
		}
	}