<?php


class AuthController extends BaseController {

	public function check(){
		if(Sentry::check()){
			return 'true';
		}else{
			return 'false';
		}
	}

	public function login(){
		$credentials = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);
		try{
			$user = Sentry::authenticate($credentials, false);
			if ($user){
				return Response::json(array('message'=>'登录成功','type'=>'success'));
			}
		}catch (Cartalyst\Sentry\Users\LoginRequiredException $e){
			return Response::json(array('message'=>'登录邮箱不能为空','type'=>'error'),500);
		}catch (Cartalyst\Sentry\Users\PasswordRequiredException $e){
			return Response::json(array('message'=>'登录密码不能为空','type'=>'error'),500);
		}catch (Cartalyst\Sentry\Users\WrongPasswordException $e){
			return Response::json(array('message'=>'密码错误','type'=>'error'),500);
		}catch (Cartalyst\Sentry\Users\UserNotFoundException $e){
			return Response::json(array('message'=>'邮箱地址不存在','type'=>'error'),500);
		}catch (Cartalyst\Sentry\Users\UserNotActivatedException $e){
			return Response::json(array('message'=>'用户未激活，请去邮箱激活','type'=>'info'),500);
		}catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e){
			return Response::json(array('message'=>'账号被冻结','type'=>'info'),500);
		}catch (Cartalyst\Sentry\Throttling\UserBannedException $e){
			return Response::json(array('message'=>'账号被禁用','type'=>'info'),500);
		}
	}

	public function logout(){
		Sentry::logout();
	}


}
