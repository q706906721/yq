<?php
	namespace app\admin\controller;
	use think\Controller;

	/**
	 * 
	 */
	class Common extends Controller
	{		
		protected function initialize(){
			if (!session('id') || !session('username')) {
				$this->error('您还没有登录','login/index');
			}
		}

		public function upload($name){
			$file = request()->file($name);
		    // 移动到框架应用根目录/public/uploads/ 目录下
		    if($file){
		        $info = $file->move('../public/static/uploads');
		        if($info){
		            // 成功上传后 获取上传信息
		            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
		            return $info->getSaveName(); 
		        }else{
		            // 上传失败获取错误信息
		            return $file->getError();
		        }
		    }
		}
	}