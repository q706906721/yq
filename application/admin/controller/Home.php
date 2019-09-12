<?php
	namespace app\admin\controller;
	use app\admin\controller\Common;
	use app\admin\model\Cate as CateModel;
	/**
	 * 
	 */
	class Home extends Common
	{
		public function index()
		{
			if (request()->isPost()) {
				$res = db('Home')->update(input());
				if($res){
					$this->success('修改成功','Home/index');
				}else{
					$this->error('修改失败');
				}
			}
			$cate = new CateModel;
			$cateres = $cate->catetree();
			$home = db('Home')->find();
			$this->assign('cateres',$cateres);
			$this->assign('home',$home);
			return view();
		}

		public function lst()
		{
			$banner = db('banner')->select();
			$this->assign('banner',$banner);
			return view();
		}

		public function add()
		{
			if (request()->isPost()) {
				$res = db('banner')->insert(input());
				if($res){
					$this->success('添加成功','home/lst');
				}else{
					$this->error('添加失败');
				}
			}
			return view();
		}

		public function edit()
		{
			if (request()->isPost()) {
				$res = db('banner')->update(input());
				if($res){
					$this->success('修改成功','home/lst');
				}else{
					$this->error('修改失败');
				}
			}
			if (input('id')) {
				$banner = db('banner')->find(input('id'));
				if (!$banner) {
					$this->error('查无此图片');
				}else{
					$this->assign('banner',$banner);
					return view();
				}
			}else{
				$this->error('查无此图片');
			}
		}

		public function del()
		{
			if (input('id')) {
				$res = db('banner')->delete(input('id'));
				if ($res) {
					$this->success('删除成功');
				}else{
					$this->error('删除失败');
				}
			}else{
				$this->error('非法访问');
			}
		}
	}