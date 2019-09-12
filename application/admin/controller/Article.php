<?php
	namespace app\admin\controller;
	use app\admin\controller\Common;

	class Article extends Common{
		public function lst(){
			$cid = input('cid');
			if ($cid) {
				$articleres =  db('article')->where('type',input('cid'))->order('id desc')->paginate(10);
			}else{
				$articleres = db('article')->order('id desc')->paginate(10);
			}
			$type = [1=>'文章',2=>'美食',3=>'消息'];
			$this->assign('cid',$cid);
			$this->assign('type',$type);
			$this->assign('articleres',$articleres);
			return view();
		}

		public function add(){
			if (request()->isPost()) {
				$article = input();
				if (empty(input('time'))) {
					$article['time'] = time();
				}else{
					$article['time'] = strtotime(input('time'));
				}
				$res = db('article')->insert($article);
				if($res){
					$this->success('新增成功','lst');
				}else{
					$this->error('新增失败');
				}
			}
			return view();
		}

		public function edit(){
			if (request()->isPost()) {
				$article = input();
				$article['time'] = strtotime(input('time'));
				$res = db('article')->update($article);
				if($res){
					$this->success('修改成功','lst');
				}else{
					$this->error('修改失败');
				}
			}
			if (input('id')) {
				$article = db('article')->find(input('id'));
				if (!$article) {
					$this->error('查无此文章');
				}
			}else{
				$this->error('非法访问');
			}
			$type = [1=>'文章',2=>'美食',3=>'消息'];
			$this->assign('type',$type);
			$this->assign('article',$article);
			return view();
		}

		public function del($id){
			$res = db('article')->delete($id);
			if ($res) {
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}
		}
		public function ajUpload (){
			if (request()->isPost()) {
				return 'http://yq.com/static/uploads/'.$this->upload('file');
			}
			return;
		}
	}