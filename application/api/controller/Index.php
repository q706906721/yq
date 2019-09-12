<?php 
	namespace app\api\controller;

	/**
	 * api index
	 */
	class Index
	{
		public function index(){
			$article = db('article')->where('type',1)->order('id desc')->paginate(3);
			$message = db('article')->where('type',3)->order('time desc')->select();
			$banner = db('banner')->select();
			$arr = ['article'=>$article,'banner'=>$banner,'message'=>$message];
			return json($arr);
		}

		public function fooder(){
			$fooder = db('article')->where('type',2)->order('time desc')->paginate(8);
			return json($fooder);
		}

		public function article(){
			$article = db('article')->where('id',input('id'))->find();
			$article['time'] = date('Y-m-d，H:i:s',$article['time']);
			return json($article);
		}
		public function reseve(){
			if (request()->isPost()) {
				$res = db('reseve')->insert(input('post.'));
				if ($res) {
					return 'success';
				}else{
					return 'fail';
				}
			}
		}
		public function user(){
			if (request()->isPost()) {
				$res = db('user')->where('nickname',input('post.nickName'))->value('id');
				if ($res) {
					return json($res);
				}else{
					$user = array(
						'nickName'    =>    input('post.nickName'),
						'avatarUrl'   =>    input('post.avatarUrl')
					);
					$insres = db('user')->insert($user);
					return json($insres);
				}
			}
		}

		public function resevelist(){
			if (request()->isPost()) {
				$res = db('reseve')->where('userId',input('post.userId'))->select();
				if ($res) {
					return json($res);
				}
			}
		}
	}	

?>